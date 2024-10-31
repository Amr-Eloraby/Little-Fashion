<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\StoreProductRequest;

class ProductConteoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('dashboard.products.show',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        return view('dashboard.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data=$request->validated();
        $image=$request->image; // Get Image
        $newImageName=time().'_'.$image->getClientOriginalName(); // Chanjectge Name
        $image->storeAs('products',$newImageName,'public'); // Add To My Project
        $data['image']=$newImageName; // Add To Variable
        Product::create($data); // Record In dDatabase

        return back()->with('status-product-create','Your Product Sent Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories=Category::get();
        return view('dashboard.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditProductRequest $request ,$id)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            $image=$request->image; // Get Image
            $newImageName=time().'_'.$image->getClientOriginalName(); // Change image Name
            $image->storeAs('products',$newImageName,'public'); // Add To My Project
            $data['image']=$newImageName; // Add To Variable
        }
        $product = Product::findOrFail($id);
        $product->update($data);
        return to_route('dashboard.product.index')->with('status-product-update','Your Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return to_route('dashboard.product.index')->with('status-product-delete','Your Product Deleted Successfully');
    }
}
