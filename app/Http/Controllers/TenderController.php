<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use App\Department;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::all();
        return view('admin.tenders.view-tender')->with(compact('tenders', 'department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.tenders.add-tender')->with(compact('departments'));
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
            'title' => 'required|min:5',
            'department_id' => 'required',
            'content' => 'required',
            'close_date' => 'required'
        ]);
        $tender = new Tender();
        $tender->title = request()->title;
        $tender->slug = str_slug(request()->title);
        $tender->department_id = request()->department_id;
        $tender->content = request()->content;
        $tender->close_date = request()->close_date;
        if ($tender->save()) {
            return redirect(route('tender.index'))->with('success', 'Tender has been created successfully');
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
        $tender = Tender::find($id);
        $departments = Department::all();
        return view('admin.tenders.edit-tender')->with(compact('tender', 'departments'));
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
        $tender = Tender::find($id);
        $this->validate($request, [
            'title' => 'required|min:5',
            'department_id' => 'required',
            'content' => 'required',
            'close_date' => 'required'
        ]);
        $tender = new Tender();
        $tender->title = request()->title;
        $tender->department_id = request()->department_id;
        $tender->content = request()->content;
        $tender->close_date = request()->close_date;
        if ($tender->save()) {
            return redirect(route('tender.index'))->with('success', 'Tender updated successfully');
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
        if (Tender::where('id',$id)->delete()) {
            return redirect()->back()->with('success', 'Tender deleted successfully');
        }

    }
}
