<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function formLogin()
    {
        return view('frontend.login');
    }
    public function formRegister()
    {
        return view('frontend.sign-up');
    }
}
