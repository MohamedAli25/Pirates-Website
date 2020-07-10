<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home()
    {
        return view('User.home_page');
    }

    public function about()
    {
        return view('User.about');
    }

    public function contact()
    {
        return view('User.contact');
    }

    // public function signIn()
    // {
    //     return view('User.sign_in');
    // }

    // public function signUp()
    // {
    //     return view('User.sign_up');
    // }
}
