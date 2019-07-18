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

    public function editCategory(Request $request,$id=null){
        if ($request->isMethod('post')) {
            $data = $request->all();

            Category::where(['id'=>$id])->update(['name'=>$data['category_name'], 'parent_id'=>$data['parent_id'], 'url'=>$data['url']]);
            return redirect('/admin/view-categories')->with('success', 'Category has been updated successfully');
        }

        $categoryDetails = Category::where(['id'=>$id])->first();
        $levels = Category::where(['parent_id'=>0])->get();
        return view('admin.categories.edit_category')->with(compact('categoryDetails','levels'));
    }

    public function deleteCategory($id = null){
        Category::where(['id'=>$id])->delete();
        return redirect()->back()->with('success', 'Category has been deleted successfully');
    }

    public function viewCategories(){
        $categories = Category::get();
        return view('admin.categories.view_categories')->with(compact('categories'));
    }
}
