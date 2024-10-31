<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $products=Product::latest()-> take(3)->get();
        return view('theme.index',compact('products'));
    }

    public function story(){
        return view('theme.story');
    }

    public function product(){
        $products=Product::latest()->paginate(9);
        return view('theme.product',compact('products'));
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

    public function contactStore(Request $request){
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'description'=>'required',
        ]);
        Contact::create($data); 
        return back()->with('status-contact-create','Your Message Sent Successfully');
    }

    public function signIn(){
        return view('theme.sign-in');
    }

    public function signUp(){
        return view('theme.sign-up');
    }
}
