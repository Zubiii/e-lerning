<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Models\AboutUsModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teachers']           =   teacher::get();
        $data['about']              =   AboutUsModel::get();
        $data['page']               =   'Teachers';
        return view('Admin.App', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data               =   new teacher;
        $data->registraion_number = "";
        $data->first_name   =   $request->first_name;
        $data->last_name    =   $request->last_name;
        $data->slug         =   str_slug($request->first_name.$request->last_name, "-");
        $data->phone_number =   $request->phone_number;
        $data->description  =   $request->description;
        $data->twitter      =   $request->twitter;
        $data->facebook     =   $request->facebook;
        $data->youtube      =   $request->youtube;
        $data->gmail        =   $request->gmail;
        $data->linkdin      =   $request->linkdin;
        $data->save();
        return redirect("admin/teachers")->with('status', 'Teacher Added Succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data       =   teacher::find($id);
        $data->delete();
        return redirect('admin/teachers')->with('deleted','Teacher Deleted Successfully!');
    }
}
