<?php

namespace App\Http\Controllers\system_users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $groups = $user->groups;

        return view('dashboard.index')
            ->with('user', $user)
            ->with('groups', $groups);
    }
}
