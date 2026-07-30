<?php

namespace App\Http\Controllers\user;

use App\Actions\Contact\SendContactEmailsAction;
use App\Actions\Contact\StoreContactAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Throwable;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(
        StoreContactRequest $request,
        StoreContactAction $storeContact,
        SendContactEmailsAction $sendContactEmails,
    ): JsonResponse|RedirectResponse {
        try {
            $contact = $storeContact->handle($request->validated());
            $sendContactEmails->handle($contact);
        } catch (Throwable $exception) {
            report($exception);

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Something went wrong while sending your message. Please try again later.',
                ], 500);
            }

            return back()
                ->withInput()
                ->with('contact_error', 'Something went wrong while sending your message. Please try again later.');
        }

        $successMessage = 'Thank you! We got your message. Our team will contact you soon.';

        if ($request->expectsJson()) {
            return response()->json([
                'message' => $successMessage,
            ]);
        }

        return back()->with('contact_success', $successMessage);
    }
}
