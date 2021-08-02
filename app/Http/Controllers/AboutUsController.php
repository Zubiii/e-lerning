<?php

namespace App\Http\Controllers;

use App\Models\AboutUsModel;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['about']              =   AboutUsModel::get();                                    //get About us Information
        $data['page']               =   "Contact";
        return view('App', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page']               =   "AboutUs";
        $data['about']              =   AboutUsModel::get();                                    //get About us Information

        // return $data['about'];
        return view('Admin.App', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        try {
            $data               = new AboutUsModel;

            $data->email  = $request->email;
            $data->description  = $request->description;
            $data->youtubeid    = $request->youtubeid;
            $data->phone        = $request->phone;
            $data->address      = $request->address;

            $data->save();

            return redirect('admin/about-us')->with('status', 'Home Slider Successfully Added!');;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $aboutUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutUs = AboutUsModel::find($id);
        $aboutUs->delete();
        return redirect('admin/about-us')->with('deleted', 'Information of Website Deleted Successfully!');;
    }
}
