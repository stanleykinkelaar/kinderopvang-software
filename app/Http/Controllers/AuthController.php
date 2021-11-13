<?php

namespace App\Http\Controllers;

use App\Forms\LoginForm;
use App\Forms\SetPassword;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SetPasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class AuthController extends Controller
{
    private FormBuilder $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }

    public function index(): View
    {
        $form = $this->formBuilder->create(LoginForm::class, [
            'method' => 'POST',
        ]);

        return view('auth.login')
            ->with('form', $form);
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (auth()->guard('system_users')->attempt($credentials)) {
            return redirect()->route('dashboard.index');
        }

        return redirect()->back()
            ->with('error', 'E-mail and/or password is wrong');
    }

    public function setPasswordView($token)
    {
        $form = $this->formBuilder->create(SetPassword::class, [
            'method' => 'POST',
            'url' => route('password.set.post', $token)
        ]);

        return view('auth.set-password')
            ->withForm($form);
    }

    public function setPasswordPost(SetPasswordRequest $request)
    {
        dd($request->email, $request->token, $request->password);
    }
}
