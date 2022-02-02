<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SetPasswordRequest;
use App\Jobs\EmailForgotPasswordJob;
use App\Mail\ForgotPasswordEmail;
use App\Models\GuardianUser;
use App\Models\PasswordReset;
use App\Models\SystemUser;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ContractView;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use never;

class AuthController extends Controller
{

    public function index(): ContractView|Factory|RedirectResponse|Application
    {
        // check if user is logged in, if so redirect back.
        if (auth('system_users')->user()) {
            return redirect()->back();
        } elseif (auth('guardian_users')->user()) {
            return redirect()->back();
        }

        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        // make sure all the sessions are closed
        session()->flush();

        $credentials = $request->only('email', 'password');

        // check if it's a system user logging in
        $isSystemUser = $this->checkIfUserIsSystemUserOrGuardianUser($credentials['email']);

        if ($isSystemUser) {
            if (auth()->guard('system_users')->attempt($credentials)) {
                return redirect()->route('dashboard.system_users.index');
            }
        } else {
            if (auth()->guard('guardian_users')->attempt($credentials)) {
                return redirect()->route('dashboard.guardian_users.index');
            }
        }

        return redirect()->back()
            ->with('error', 'E-mail and/or password is wrong');
    }

    public function setPasswordView($token): ContractView|Factory|never|Application
    {
        if (!PasswordReset::where('token', $token)->first()) {
            return abort(403);
        }

        return view('auth.set-password')
            ->with('token', $token);
    }

    public function setPasswordPost(SetPasswordRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $passwordResetUserEmail = PasswordReset::where('token', $request['token'])->first()->email;

        // check where email is the selected email and the password is empty
        $isSystemUser = $this->checkIfUserIsSystemUserOrGuardianUser($passwordResetUserEmail);

        if ($isSystemUser) {
            $this->setPasswordForSystemUser($passwordResetUserEmail, $data['password']);
        } else {
            $this->setPasswordForGuardianUser($passwordResetUserEmail, $data['password']);
        }

        // delete password reset token
        PasswordReset::where('token', $request['token'])->delete();

        return redirect()->route('login')
            ->with('success', 'Wachtwoord is aangepast!');
    }

    public function setPasswordForSystemUser(string $email, string $password)
    {
        $user = SystemUser::where('email', $email)->first();
        $user->password = bcrypt($password);
        $user->saveOrFail();
    }

    public function setPasswordForGuardianUser(string $email, string $password)
    {
        $user = GuardianUser::where('email', $email)->first();
        $user->password = bcrypt($password);
        $user->saveOrFail();
    }

    /**
     * @param string $email
     * @return bool|void
     *
     * If SystemUser return is true
     * If GuardianUser return is false
     */
    public function checkIfUserIsSystemUserOrGuardianUser(string $email)
    {
        if (SystemUser::where('email', $email)->first() == true) {
            return true;
        }

        if (GuardianUser::where('email', $email)->first()) {
            return false;
        }
    }

    public function forgotPassword(): Factory|ContractView|Application
    {
        return view('auth.forgot-password');
    }

    public function forgotPasswordSend(ForgotPasswordRequest $forgotPasswordRequest): RedirectResponse
    {

        $request = $forgotPasswordRequest->validated();

        $passwordResetData = PasswordReset::create([
            'email' => $request['email'],
            'token' => PasswordReset::generateToken(),
        ]);

        Mail::to($passwordResetData['email'])->send(new ForgotPasswordEmail($passwordResetData['token']));

        return redirect()->route('login')
            ->with('success', 'Gelukt! bekijk je e-mail voor de uitleg');
    }
}
