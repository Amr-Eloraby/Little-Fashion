<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Container\Attributes\Storage;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index-dashboard');
    }

    public function productCreate(){
        $categories=Category::get();
        return view('dashboard.products.create',compact('categories'));
    }

    public function productStore(StoreProductRequest $request){
        $data=$request->validated();
        $image=$request->image; // Get Image
        $newImageName=time().'_'.$image->getClientOriginalName(); // Chanjectge Name
        $image->storeAs('products',$newImageName,'public'); // Add To My Project
        $data['image']=$newImageName; // Add To Variable
        Product::create($data); // Record In dDatabase

        return back()->with('status-product-create','Your Product Sent Successfully');
    }

    public function productShow(){
        $products=Product::paginate(10);
        return view('dashboard.products.show',compact('products'));
    }

    public function productEdit($id){
        $product = Product::findOrFail($id);
        $categories=Category::get();
        return view('dashboard.products.edit',compact('product','categories'));
    }

    public function productUpdate(EditProductRequest $request ,$id){
        $data=$request->validated();
        if ($request->hasFile('image')) {
            $image=$request->image; // Get Image
            $newImageName=time().'_'.$image->getClientOriginalName(); // Change image Name
            $image->storeAs('products',$newImageName,'public'); // Add To My Project
            $data['image']=$newImageName; // Add To Variable
        }
        $product = Product::findOrFail($id);
        $product->update($data);
        return to_route('dashboard.product.show')->with('status-product-update','Your Product Updated Successfully');
    }

    public function productDestroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return to_route('dashboard.product.show')->with('status-product-delete','Your Product Deleted Successfully');
    }

    public function categoryCreate(){
        return view('dashboard.category.create');
    }

    public function categoryStore(Request $request){
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

    public function categoryEdit($id){
        $category = Category::findOrFail($id);
        return view('dashboard.category.edit',compact('category'));
    }

    public function categoryUpdate(Request $request , $id){
        $data=$request->validate([
            'name'=>'required',
        ]);
        $category = Category::findOrFail($id);
         $category->update($data);
        return to_route('dashboard.category.show')->with('status-category-update','Your Category Name Updated Successfully');
    }

    public function categoryDestroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return to_route('dashboard.category.show')->with('status-category-delete','Your Category Deleted Successfully');
    }

    public function contactShow(){
        $contacts=Contact::paginate(8);
        return view('dashboard.contacts.show',compact('contacts'));
    }


}
