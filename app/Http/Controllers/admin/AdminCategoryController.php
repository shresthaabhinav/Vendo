<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function addcategory(){
        return view('admin.add-category');
    }

    public function createcategory(Request $request){
        $request->validate([
                "c_name" => "required",
                "c_commission" => "required",
        ]);

        Category::create([
                "c_name" => $request->c_name,
                "c_commission" => $request->c_commission,
        ]);

        return redirect('admin/add-category')->with('msg','Added Category Successfully');
    }

    public function viewcategory(){
        $category = Category::all();
        return view('admin.view-category',compact('category'));
    }

    public function editcategory($c_id){
        $category = Category::find($c_id);
        return view('admin.edit-category',compact('category'));
    }

    public function updatecategory(Request $request, $c_id){
        $category = Category::find($c_id);

        $request->validate([
                "c_name" => "required",
                "c_commission" => "required",
        ]);

        $category->update([
                "c_name" => $request->c_name,
                "c_commission" => $request->c_commission,
        ]);

        return view('admin.view-category')->with('msg','Updated Category Successfully');
    }

}
