<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(): string
    {
        $user = auth()->user();
        $groups = $user->groups;

        return view('dashboard.index')
            ->withUser($user)
            ->withGroups($groups);
    }
}
