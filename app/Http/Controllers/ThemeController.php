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

    public function product($id){
        $products=Product::where('category_id',$id)->latest()->paginate(9);
        return view('theme.product',compact('products'));
    }

    public function singelProduct($id){
        $product=Product::find($id);
        return view('theme.singel-product',compact('product'));
    }

    public function payment(Request $request){
        $data=$request->validate([
            'card-name'=>'required',
            'card-number'=>'required',
            'expiration'=>'required',
            'cvv'=>'required',
        ]);
        return back()->with('payment','Payment has been completed successfully.');
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
