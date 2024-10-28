<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

    public function story(){
        return view('theme.story');
    }

    public function product(){
        return view('theme.product');
    }

    public function singelProduct(){
        return view('theme.singel-product');
    }

    public function faqs(){
        return view('theme.faqs');
    }

    public function contact(){
        return view('theme.contact');
    }

    public function signIn(){
        return view('theme.sign-in');
    }

    public function signUp(){
        return view('theme.sign-up');
    }
}
