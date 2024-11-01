<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('dashboard.login');
    }

    public function store(LoginRequest $request){
        $request->validated();
        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])) {
            return to_route('dashboard.index');
        }else{
            return back()->with('message-login','This account is not verified.');
        }
    }
}
