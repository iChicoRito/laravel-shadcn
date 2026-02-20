<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\Auth\VerifyEmailMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Mail;

class AuthController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegister()
    {
        return Inertia::render('auth/Register');
    }

    /**
     * Handle account registration.
     */
    public function register(RegisterRequest $request)
    {
        $token = Str::random(64);

        $user = User::create([
            'username'           => $request->username,
            'email'              => $request->email,
            'password'           => $request->password,
            'verification_token' => $token,
        ]);

        $verificationUrl = route('auth.verify.email', ['token' => $token]);

        Mail::to($user->email)->send(new VerifyEmailMail($verificationUrl));

        return redirect()->route('auth.register')
            ->with('success', 'Account created! Please check your email to verify your account.');
    }

    /**
     * Handle email verification.
     */
    public function verifyEmail(Request $request)
    {
        $user = User::where('verification_token', $request->token)->firstOrFail();

        $user->update([
            'email_verified_at'  => now(),
            'verification_token' => null,
        ]);

        return redirect()->route('auth.login')
            ->with('success', 'Email verified successfully! You can now log in.');
    }

    /**
     * Show the login form.
     */
    public function showLogin()
    {
        return Inertia::render('auth/Login');
    }
}