<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use App\Category;

class IndexController extends Controller
{
    public function index(){

        // Get All Tenders
        $tendersAll = Tender::paginate(5);

        // Get All Category and Sub Category
        $categories_menu = "";
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        foreach ($categories as $cat) {
            $categories_menu .="<div class='panel-heading' role='tab' id='headingOne'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordion' href='#".$cat->id."' aria-expanded='false' aria-controls='collapseOne'>".$cat->name."
                        <span> </span>
                    </a>
                </h4>
            </div>
            <div id='.$cat->id.' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOne'>
                <div class='panel-body'>
                      <ul>";
                        $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
                        foreach ($sub_categories as $subcat) {
                            $categories_menu .= "<li><a href='#".$subcat->url."'>".$subcat->name."</a></li>";
                        }
                        $categories_menu .= "</ul>
                </div>
            </div>
            ";
        }

        return view('index')->with(compact('tendersAll', 'categories', 'categories_menu'));
    }
}
