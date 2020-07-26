<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home()
    {
        return view('general.home_page');
    }

    public function about()
    {
        return view('general.about');
    }

    public function contact()
    {
        return view('general.contact');
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
