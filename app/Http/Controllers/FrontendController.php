<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{

    /**
     * Display index in web Page for all users.
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Display Signin in web Page for all users.
     */
    public function userSignin(): View
    {
        return view('layouts.frontend.pages.signin');
    }
}
