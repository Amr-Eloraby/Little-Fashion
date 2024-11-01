<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index(){

        if(Auth::guard('admin')->check()){
            return view('dashboard.index-dashboard');
        }else{
            return to_route('admin.index');
        }

    }    

    public function contactShow(){
        $contacts=Contact::paginate(8);
        return view('dashboard.contacts.show',compact('contacts'));
    }


}
