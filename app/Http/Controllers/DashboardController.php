<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index-dashboard');
    }

    public function create(){
        return view('dashboard.products.create');
    }

    public function show(){
        return view('dashboard.products.show');
    }
}
