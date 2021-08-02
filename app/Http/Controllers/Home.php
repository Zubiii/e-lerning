<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use App\Models\AboutUsModel;
use App\Models\SubjectModel;
use App\Models\students;
use App\Models\teacher;
use App\Models\university;
use App\Models\course;
use App\Models\testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $data['home']               =   HomeModel::get();                                       //get Home Slider
        $data['about']              =   AboutUsModel::get();                                    //get About us Information
        $data['totalCourses']       =   course::count();                                        //get Courses
        $data['totalSubject']       =   SubjectModel::count();                                  //count of All Subjects
        $data['totalStudents']      =   students::count();                                      //countall Register Users 
        $data['totalTeachers']      =   teacher::count();                                       //count all teacher
        $data['totalUniversities']  =   university::count();                                    //count Universitis 
        $data['courses']            =   course::get();                                          //get Courses
        $data['teachers']           =   teacher::get();                                         //get All records of techers
        $data['testimonials']       =   testimonial::get();                                     //get Testimonial
        $data['page']               =   "Home";
        
        // return json_encode($data);
        return view('App', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sliderCreate()
    {
        $data['home']               =   HomeModel::get();                                       //get Home Slider
        $data['page']               =   "HomeSlider"; 

        return view('Admin.App', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sliderStore(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('images\slider-image'), $imageName);
            
            $data       = new HomeModel;

            $data->name         = $request->name;
            $data->slug         = str_slug($request->name, "-");
            $data->category     = "";
            $data->image        = $imageName;
            $data->title        = $request->title;
            $data->shortDes     = $request->shortDes;
            $data->btnName      = $request->btnName;
            $data->btnUrl       = $request->btnUrl;

            $data->save();

            return redirect('admin/home-slider')->with('status', 'Home Slider Successfully Added!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $Home
     * @return \Illuminate\Http\Response
     */
    public function show(HomeModel $Home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $Home
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeModel $Home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $Home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeModel $Home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $Home
     * @return \Illuminate\Http\Response
     */
    public function sliderDestroy($id)
    {
        // return $id;
        
        $home = HomeModel::find($id);
        $home->delete();
        return redirect('admin/home-slider')->with('deleted', 'Home Slider Deleted!');;

    }
}
