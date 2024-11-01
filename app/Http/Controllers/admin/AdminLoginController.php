<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AdminLoginController extends Controller
{
    public function index(){
        if(Auth::guard('admin')->check()){
            return to_route('dashboard.index');
        }else{
            return view('dashboard.login');
        }
    }

    public function store(LoginRequest $request){
        $request->validated();
        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])) {
            return to_route('dashboard.index');
        }else{
            return back()->with('message-login','This account is not verified.');
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.index');
    }
}
