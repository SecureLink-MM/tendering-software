<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Tender;
use App\AwardTender;

class IndexController extends Controller
{
    public function index(){
        $tenders = Tender::all();
        $departments = Department::get();
        return view('index')->with(compact('tenders','departments'));
    }

    public function awardtender(){
        $awardtenders = AwardTender::all();
        return view('award-tender')->with(compact('awardtenders'));
    }

    public function tenderDetails($slug){
        $tender = Tender::where('slug',$slug)->first();
        return view('tenders.tender-details')->with(compact('tender'));
    }

    public function tenderByDepartment($slug){
        $department = Department::where('slug',$slug)->first();
        $tenders = $department->tenders()->get();
        return view('index')->with(compact('department', 'tenders'));
    }
}
