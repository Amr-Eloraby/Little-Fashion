<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryConteoller extends Controller
{   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::guard('admin')->check()){
        $categories = Category::paginate(4);
        return view('dashboard.category.show',compact('categories'));
        }else{
            return to_route('admin.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        if(Auth::guard('admin')->check()){
        return view('dashboard.category.create');
        }else{
            return to_route('admin.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
        ]);
        Category::create($data);

        return back()->with('status-category-create','Your Category Sent Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {
        $data=$request->validate([
            'name'=>'required',
        ]);
        $category = Category::findOrFail($id);
         $category->update($data);
        return to_route('dashboard.category.index')->with('status-category-update','Your Category Name Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return to_route('dashboard.category.index')->with('status-category-delete','Your Category Deleted Successfully');
    }
}
