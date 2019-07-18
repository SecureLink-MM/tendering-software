<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function addCategory(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();

            $category = new Category;
            $category->name = $data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->url = $data['url'];
            $category->save();
            return redirect('/admin/view-categories')->with('success', 'Category has been added successfully!');
        }
        $levels = Category::where(['parent_id'=>0])->get();
        return view('admin.categories.add_category')->with(compact('levels'));
    }

    public function viewCategories(){
        $categories = Category::get();
        return view('admin.categories.view_categories')->with(compact('categories'));
    }
}
