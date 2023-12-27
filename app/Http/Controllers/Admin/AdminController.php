<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        if (Auth::user()) {
            return view('admin.index');
        }else{
            return view('auth.login');
        }
    }
}
