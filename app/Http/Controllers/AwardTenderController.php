<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AwardTender;
use Auth;

class AwardTenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awardtenders = AwardTender::all();
        $user = Auth::user();
        return view('admin.tenders.view-awardtender')->with(compact('awardtenders', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.tenders.add-awardtender')->with(compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'tender_name' => 'required|min:5',
          'company_name' => 'required|min:5'
      ]);

      $awardtender = new AwardTender();
      $awardtender->tender_name = request()->tender_name;
      $awardtender->slug = str_slug(request()->tender_name);
      $awardtender->company_name = request()->company_name;
      $awardtender->description = request()->description;

      if ($awardtender->save()) {
          return redirect(route('award-tender.index'))->with('success', 'Award Tender added successfully');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $awardtender = AwardTender::find($id);
        $user = Auth::user();
        return view('admin.tenders.edit-awardtender')->with(compact('awardtender', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'tender_name' => 'required|min:5',
          'company_name' => 'required|min:5'
      ]);

      $awardtender = AwardTender::find($id);
      $awardtender->tender_name = request()->tender_name;
      $awardtender->slug = str_slug(request()->tender_name);
      $awardtender->company_name = request()->company_name;
      $awardtender->description = request()->description;

      if ($awardtender->save()) {
          return redirect(route('award-tender.index'))->with('success', 'Award Tender updated successfully');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (AwardTender::where('id',$id)->delete()) {
            return redirect()->back()->with('success', 'AwardTender deleted successfully');
        }
    }
}
