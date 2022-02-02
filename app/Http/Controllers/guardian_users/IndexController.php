<?php

namespace App\Http\Controllers\guardian_users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('guardian_dashboard.index')
            ->with('user', $user);
    }
}
