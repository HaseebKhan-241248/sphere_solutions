<?php

namespace Tests\Unit;

use App\Http\Requests\StoreCustomCheckoutRequest;
use Tests\TestCase;

class StoreCustomCheckoutRequestTest extends TestCase
{
    public function test_unit_amount_converts_decimal_currency_to_cents(): void
    {
        $request = StoreCustomCheckoutRequest::create('/checkout/custom', 'POST', [
            'amount' => 500.50,
            'currency' => 'cad',
        ]);
        $request->setContainer($this->app);
        $request->validateResolved();

        $this->assertSame('cad', $request->currency());
        $this->assertSame(50050, $request->unitAmount());
        $this->assertFalse($request->isZeroDecimalCurrency());
    }

    public function test_unit_amount_keeps_whole_units_for_jpy(): void
    {
        $request = StoreCustomCheckoutRequest::create('/checkout/custom', 'POST', [
            'amount' => 1500,
            'currency' => 'JPY',
        ]);
        $request->setContainer($this->app);
        $request->validateResolved();

        $this->assertSame('jpy', $request->currency());
        $this->assertSame(1500, $request->unitAmount());
        $this->assertTrue($request->isZeroDecimalCurrency());
    }
}
