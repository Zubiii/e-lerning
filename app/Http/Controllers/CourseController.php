<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\AboutUsModel;
use App\Models\CourseCategory;
use App\Models\CourseLecture;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses']                =   course::get();
        $data['courseCategories']       =   CourseCategory::get();
        // return json_encode($data['courseCategories']);

        $data['about']                  =   AboutUsModel::get();                                    //get About us Information
        $data['page']                   =   "Courses";
        return view('App', $data);
    }

    public function adminIndex()
    {
        $data['courses']                =   course::get();
        $data['courseCategories']       =   CourseCategory::get();
        // return json_encode($data['courseCategories']);

        // $data['about']                  =   AboutUsModel::get();                                    //get About us Information
        $data['page']                   =   "Courses";
        return view('Admin.App', $data);
    }

    public function detail($id)
    {
        $data['course']                =   course::where('id', $id)->get();
        $data['courseCategories']       =   CourseCategory::get();
        // return json_encode($data['courses']);

        $data['about']                  =   AboutUsModel::get();                                    //get About us Information
        $data['page']                   =   "Course-Detail";
        // return json_encode($data);
        return view('App', $data);
    }

    public function courseCategory($name)
    {
        $CategoryID                     =   CourseCategory:: where('slug', $name)->select('id','name')->get();
        $data['courses']                =   course::where('category_id', $CategoryID[0]->id)->get();
        $data['categoryName']           =   $CategoryID[0]->name;

        $data['about']                  =   AboutUsModel::get();                                    //get About us Information
        $data['page']                   =   "Course-Ctegory";
        // return json_encode($data);
        return view('App', $data);
    }

    public function enroll($name)
    {
        
        $data['page']           =   "Course-Enroll";
        $data['about']          =   AboutUsModel::get();                                    //get About us Information
        $data['lectures']       =   CourseLecture::get();
        $data['firstLink']      =   $data['lectures'][0]->youtube_id;

        // return $data;
        return view('App', $data);
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
        try {
            $request ->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images\courses'), $imageName);

            $data                   =   new course;
            $data->name             =   $request->name;
            $data->slug             =   str_slug($request->name, "-");
            $data->category_id      =    $request->category_id;
            $data->img              =   $imageName;
            $data->desc             =   $request->description;

            $data->save();
            return redirect('admin/courses')->with('status', 'Course Added Successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data       = course::find($id);
        $data->delete();

        return redirect('admin/courses')->with('deleted', 'Course Deleted Successfully!');
    }
}
