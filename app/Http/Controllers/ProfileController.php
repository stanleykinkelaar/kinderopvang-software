<?php

namespace App\Http\Controllers;

use App\Forms\LoginForm;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $form = $this->formBuilder->create(LoginForm::class, [
            'method' => 'POST',
        ]);

        return view('dashboard.profile')
            ->with('form', $form)
            ->withUser($user);
    }
}
