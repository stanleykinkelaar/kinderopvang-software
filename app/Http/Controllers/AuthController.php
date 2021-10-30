<?php

namespace App\Http\Controllers;

use App\Forms\LoginForm;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
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

        return view('login')
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
}
