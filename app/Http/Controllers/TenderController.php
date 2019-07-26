<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use App\Category;

class TenderController extends Controller
{

    public function addTender(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();

            $tender = new Tender;
            $tender->tender_name = $data['tender_name'];
            if (!empty($data['tender_description'])) {
                $tender->tender_description = $data['tender_description'];
            }else {
                $tender->tender_description = '';
            }
            $tender->category_id = $data['category_id'];
            $tender->end_date = $data['end_date'];
            $tender->save();
            return redirect('/admin/view-tenders')->with('success', 'Tender has been added successfully!');
        }

        $categories = Category::where(['parent_id' => 0])->get();
        $categories_drop_down = "<option value='' selected disabled>Select</option>";
		    foreach($categories as $cat){
			      $categories_drop_down .= "<option value='".$cat->id."'>".$cat->name."</option>";
			      $sub_categories = Category::where(['parent_id' => $cat->id])->get();
			      foreach($sub_categories as $sub_cat){
				          $categories_drop_down .= "<option value='".$sub_cat->id."'>&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";
			      }
		    }

        return view('admin.tenders.add_tender')->with(compact('categories_drop_down'));
    }

    public function editTender(Request $request,$id=null){
        if ($request->isMethod('post')) {
            $data = $request->all();

          Tender::where(['id'=>$id])->update(['tender_name'=>$data['tender_name'], 'tender_description'=>$data['tender_description'], 'category_id'=>$data['category_id'], 'end_date'=>$data['end_date']]);

			     return redirect('/admin/view-tenders')->with('success', 'Tender has been updated successfully!');
        }

        // Get Tender Details start //
    		$tenderDetails = Tender::where(['id'=>$id])->first();
    		// Get Tender Details End //

    		// Categories drop down start //
    		$categories = Category::where(['parent_id' => 0])->get();
    		$categories_drop_down = "<option value='' disabled>Select</option>";
    		foreach($categories as $cat){
    			if($cat->id==$tenderDetails->category_id){
    				$selected = "selected";
    			}else{
    				$selected = "";
    			}
    			$categories_drop_down .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
    			$sub_categories = Category::where(['parent_id' => $cat->id])->get();
    			foreach($sub_categories as $sub_cat){
    				if($sub_cat->id==$tenderDetails->category_id){
    					$selected = "selected";
    				}else{
    					$selected = "";
    				}
    				$categories_drop_down .= "<option value='".$sub_cat->id."' ".$selected.">&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";
    			}
    		}
    		// Categories drop down end //
    		return view('admin.tenders.edit_tender')->with(compact('tenderDetails','categories_drop_down'));
    }

    public function deleteTender($id = null){
        Tender::where(['id'=>$id])->delete();
        return redirect()->back()->with('success', 'Tender has been deleted successfully!');
    }

    public function viewTenders(Request $request){
        $tenders = Tender::get();
        foreach ($tenders as $key => $value) {
          $category_name = Category::where(['id' => $value->category_id])->first();
          $tenders[$key]->category_name = $category_name->name;
        }
        return view('admin.tenders.view_tenders')->with(compact('tenders'));
    }

    // Category Listing Page
    public function tenders($url = null){
        // Get All Category and Sub Category
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $categoryDetails = Category::where(['url'=>$url])->first();

        if ($categoryDetails->parent_id==0) {
            // If url is main category url
            $subCategories = Category::where(['parent_id' => $categoryDetails->id])->get();
            $subCategories = json_decode(json_encode($subCategories));
            foreach ($subCategories as $subcat) {
                $cat_ids[] = $subcat->id;
            }
            $tendersAll = Tender::whereIn('category_id', $cat_ids)->get();
        }else {
            // If url is sub category url
            $tendersAll = Tender::where(['category_id'=>$categoryDetails->id])->get();
        }

        return view('tenders.listing')->with(compact('categories', 'categoryDetails', 'tendersAll'));
    }

    // Tender Detail Page
    public function tender($id = null){
        // Get Tender Details
        $tenderDetails = Tender::where(['id'=>$id])->first();

        // Get All Category and Sub Category
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();

        return view('tenders.detail')->with(compact('tenderDetails', 'categories'));
    }
}
