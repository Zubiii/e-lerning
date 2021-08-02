<?php

namespace App\Http\Controllers;

use App\Models\university;
use Illuminate\Http\Request;
use App\Models\AboutUsModel;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page']           =   'Universities';
        $data['about']          =   AboutUsModel::get();
        $data['universities']   =   university::get();

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
        $data               =   new university;
        $data->name         =   $request->name;
        $data->slug         =   str_slug($request->name, "-");
        $data->link         =   $request->link;
        $data->short_title  =   $request->short_title;
        $data->save();

        return redirect('admin/universities')->with('status', 'University Added Susscessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\university  $university
     * @return \Illuminate\Http\Response
     */
    public function show(university $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\university  $university
     * @return \Illuminate\Http\Response
     */
    public function edit(university $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\university  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, university $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\university  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  university::find($id);
        $data->delete();
        return redirect('admin/universities')->with('deleted', 'University Deleted Successfully!');
    }
}
