<?php

namespace App\Http\Controllers\user;

use App\Actions\Checkout\CreatePackageCheckoutSessionAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use InvalidArgumentException;
use Throwable;

class CheckoutController extends Controller
{
    public function store(string $package, CreatePackageCheckoutSessionAction $createCheckoutSession): RedirectResponse
    {
        try {
            $session = $createCheckoutSession->handle($package);
        } catch (InvalidArgumentException $exception) {
            return redirect()
                ->route('prices')
                ->with('checkout_error', $exception->getMessage());
        } catch (Throwable $exception) {
            report($exception);

            return redirect()
                ->route('prices')
                ->with('checkout_error', 'Unable to start checkout right now. Please try again or contact us.');
        }

        return redirect()->away($session->url);
    }

    public function success(): View
    {
        return view('pages.checkout-success');
    }

    public function cancel(): View
    {
        return view('pages.checkout-cancel');
    }
}
