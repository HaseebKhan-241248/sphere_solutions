<?php

namespace Tests\Feature;

use Mockery;
use Tests\TestCase;

class PackageCheckoutTest extends TestCase
{
    public function test_packages_page_lists_all_plans(): void
    {
        $response = $this->get(route('prices'));

        $response->assertOk()
            ->assertSee('Basic Package')
            ->assertSee('Standard Package')
            ->assertSee('Premium Package')
            ->assertSee('Platinum Package')
            ->assertDontSee('Enterprise Package')
            ->assertSee('Custom Payment')
            ->assertSee('USD / Month')
            ->assertSee('Buy Now')
            ->assertSee('id="customCurrency"', false)
            ->assertSee('CAD — Canadian Dollar')
            ->assertSee('USD — US Dollar');
    }

    public function test_checkout_redirects_back_when_stripe_is_not_configured(): void
    {
        config(['services.stripe.secret' => null]);

        $response = $this->from(route('prices'))
            ->post(route('checkout.store', 'basic'));

        $response->assertRedirect(route('prices'))
            ->assertSessionHas('checkout_error');
    }

    public function test_checkout_rejects_enterprise_package(): void
    {
        config(['services.stripe.secret' => 'sk_test_dummy']);

        $response = $this->from(route('prices'))
            ->post(route('checkout.store', 'enterprise'));

        $response->assertRedirect(route('prices'))
            ->assertSessionHas('checkout_error');
    }

    public function test_checkout_rejects_unknown_package(): void
    {
        config(['services.stripe.secret' => 'sk_test_dummy']);

        $response = $this->from(route('prices'))
            ->post(route('checkout.store', 'unknown'));

        $response->assertRedirect(route('prices'))
            ->assertSessionHas('checkout_error');
    }

    public function test_custom_checkout_requires_amount(): void
    {
        $response = $this->from(route('prices'))
            ->post(route('checkout.custom'), [
                'currency' => 'cad',
            ]);

        $response->assertRedirect(route('prices'))
            ->assertSessionHasErrors('amount');
    }

    public function test_custom_checkout_requires_currency(): void
    {
        $response = $this->from(route('prices'))
            ->post(route('checkout.custom'), [
                'amount' => 150,
            ]);

        $response->assertRedirect(route('prices'))
            ->assertSessionHasErrors('currency');
    }

    public function test_custom_checkout_rejects_unsupported_currency(): void
    {
        $response = $this->from(route('prices'))
            ->post(route('checkout.custom'), [
                'amount' => 150,
                'currency' => 'xyz',
            ]);

        $response->assertRedirect(route('prices'))
            ->assertSessionHasErrors('currency');
    }

    public function test_custom_checkout_rejects_amount_below_minimum(): void
    {
        $response = $this->from(route('prices'))
            ->post(route('checkout.custom'), [
                'amount' => 0.5,
                'currency' => 'cad',
            ]);

        $response->assertRedirect(route('prices'))
            ->assertSessionHasErrors('amount');
    }

    public function test_custom_checkout_redirects_back_when_stripe_is_not_configured(): void
    {
        config(['services.stripe.secret' => null]);

        $response = $this->from(route('prices'))
            ->post(route('checkout.custom'), [
                'amount' => 150,
                'currency' => 'cad',
            ]);

        $response->assertRedirect(route('prices'))
            ->assertSessionHas('checkout_error');
    }

    public function test_custom_checkout_accepts_usd_currency(): void
    {
        config(['services.stripe.secret' => null]);

        $response = $this->from(route('prices'))
            ->post(route('checkout.custom'), [
                'amount' => 500,
                'currency' => 'USD',
            ]);

        // Validation passes; Stripe not configured is the expected failure path.
        $response->assertRedirect(route('prices'))
            ->assertSessionHas('checkout_error')
            ->assertSessionDoesntHaveErrors(['amount', 'currency']);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
