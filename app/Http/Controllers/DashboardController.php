<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index-dashboard');
    }

    public function productCreate(){
        return view('dashboard.products.create');
    }
    public function proudctStore(Request $request)
    {
        $data=$request->validate();
        dd($data);

        $image=$request->image; // Get Image
        $newImageName=time().'_'.$image->getClientOriginalName(); // Chanjectge Name
        $image->storeAs('blogs',$newImageName,'public'); // Add To My Project
        $data['image']=$newImageName; // Add To Variable
        Product::create($data); // Record In dDatabase

        return back()->with('status-blog','Your Blog Sent Successfully');
    }

    public function productShow(){
        return view('dashboard.products.show');
    }

    public function categoryCreate(){
        return view('dashboard.category.create');
    }

    public function categoryStore(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
        ]);
        Category::create($data);

        return back()->with('status-category-create','Your Category Sent Successfully');
    }

    public function categoryShow(){
        $categories = Category::paginate(4);
        return view('dashboard.category.show',compact('categories'));
    }
}
