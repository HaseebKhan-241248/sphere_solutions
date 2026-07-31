<?php

namespace App\Http\Controllers\user;

use App\Actions\Newsletter\SendNewsletterSubscriberEmailAction;
use App\Actions\Newsletter\StoreNewsletterSubscriberAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsletterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Throwable;

class NewsletterController extends Controller
{
    public function store(
        StoreNewsletterRequest $request,
        StoreNewsletterSubscriberAction $storeSubscriber,
        SendNewsletterSubscriberEmailAction $sendSubscriberEmail,
    ): JsonResponse|RedirectResponse {
        try {
            $result = $storeSubscriber->handle($request->validated());

            if ($result['created']) {
                $sendSubscriberEmail->handle($result['subscriber']);
            }
        } catch (Throwable $exception) {
            report($exception);

            $errorMessage = 'Something went wrong while signing you up. Please try again later.';

            if ($request->expectsJson()) {
                return response()->json(['message' => $errorMessage], 500);
            }

            return back()
                ->withInput()
                ->with('newsletter_error', $errorMessage);
        }

        $successMessage = $result['created']
            ? 'Thank you for subscribing! Please check your email.'
            : 'You are already subscribed to our newsletter.';

        if ($request->expectsJson()) {
            return response()->json(['message' => $successMessage]);
        }

        return back()->with('newsletter_success', $successMessage);
    }
}
