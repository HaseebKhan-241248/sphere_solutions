<?php

namespace App\Http\Controllers\user;

use App\Actions\EntrepreneurSignup\SendEntrepreneurSignupEmailAction;
use App\Actions\EntrepreneurSignup\StoreEntrepreneurSignupAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEntrepreneurSignupRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Throwable;

class EntrepreneurSignupController extends Controller
{
    public function index()
    {
        return view('pages.entrepreneur-signup');
    }

    public function store(
        StoreEntrepreneurSignupRequest $request,
        StoreEntrepreneurSignupAction $storeSignup,
        SendEntrepreneurSignupEmailAction $sendSignupEmail,
    ): JsonResponse|RedirectResponse {
        if (filled($request->input('website'))) {
            $fakeSuccess = 'Thank you for signing up. We have received your information and will contact you if there is a suitable opportunity.';

            if ($request->expectsJson()) {
                return response()->json(['message' => $fakeSuccess]);
            }

            return back()->with('entrepreneur_success', $fakeSuccess);
        }

        try {
            $signup = $storeSignup->handle(
                $request->validated(),
                route('entrepreneur-signup'),
            );
            $sendSignupEmail->handle($signup);
        } catch (Throwable $exception) {
            report($exception);

            $errorMessage = 'Something went wrong while submitting your interest. Please try again later.';

            if ($request->expectsJson()) {
                return response()->json(['message' => $errorMessage], 500);
            }

            return back()
                ->withInput()
                ->with('entrepreneur_error', $errorMessage);
        }

        $successMessage = 'Thank you for signing up. We have received your information and will contact you if there is a suitable opportunity.';

        if ($request->expectsJson()) {
            return response()->json(['message' => $successMessage]);
        }

        return back()->with('entrepreneur_success', $successMessage);
    }
}
