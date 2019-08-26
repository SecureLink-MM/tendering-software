<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use App\Department;
use Auth;

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
        $user = Auth::user();
        return view('admin.tenders.view-tender')->with(compact('tenders', 'department', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $user = Auth::user();
        return view('admin.tenders.add-tender')->with(compact('departments', 'user'));
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
            'filename' => 'required',
            'filename.*' => 'mimes:pdf',
            'close_date' => 'required'
        ]);

        if (request()->has('filename')) {
            $file = request()->file('filename');
            $file_name = uniqid().$file->getClientOriginalName();
        }

        $tender = new Tender();
        $tender->title = request()->title;
        $tender->slug = str_slug(request()->title);
        $tender->department_id = request()->department_id;
        $tender->content = request()->content;
        $tender->filename = $file_name;
        $tender->close_date = request()->close_date;
        if ($tender->save()) {
            $file->move(public_path('files'),$file_name);
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
        $user = Auth::user();
        return view('admin.tenders.edit-tender')->with(compact('tender', 'departments', 'user'));
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

        if (request()->has('filename')) {
            $file = request()->file('filename');
            $file_name = uniqid().$file->getClientOriginalName();
            $file->move(public_path('files'),$file_name);
        }else {
            $file_name = $tender->filename;
        }

        $tender->title = request()->title;
        $tender->slug = str_slug(request()->title);
        $tender->department_id = request()->department_id;
        $tender->content = request()->content;
        $tender->filename = $file_name;
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
