<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Mockery;
use Tests\TestCase;

class PackageCheckoutTest extends TestCase
{
    use DatabaseTransactions;

    public function test_packages_page_lists_all_plans(): void
    {
        $response = $this->get(route('prices'));

        $response->assertOk()
            ->assertSee('Basic Package')
            ->assertSee('Standard Package')
            ->assertSee('Premium Package')
            ->assertSee('Platinum Package')
            ->assertSee('Enterprise Package')
            ->assertSee('Buy Now')
            ->assertSee('Request a Quote');
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

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
