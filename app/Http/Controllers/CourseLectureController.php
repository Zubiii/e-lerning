<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseLecture;
use App\Models\AboutUsModel;
use App\Models\course;

class CourseLectureController extends Controller
{
    public function index()
    {
        $data['page']           =   "Course-Videos";
        $data['about']          =   AboutUsModel::get();
        $data['courseLecture']  =   CourseLecture::get();

        return view('Admin.App',$data);
    }

    public function create()
    {
        $data['page']           =   "Course-Videos";
        $data['about']          =   AboutUsModel::get();
        $data['courseLecture']  =   CourseLecture::get();
        $data['courseList']  =   course::get();

        return view('Admin.App',$data);
    }

    public function store(Request $request)
    {
        // return $request;
        $data               =   new CourseLecture;
        $data->course_id    =   $request->course_id;
        $data->title        =   $request->title;
        $data->youtube_id   =   $request->youtube_id;
        $data->short_des    =   $request->short_des;
        $data->episode_num  =   $request->episode_num;
        $data->save();

        return redirect('admin/course-video')->with('status','Video Added Successfully!');

    }

    public function destroy($id)
    {
        $data       =   CourseLecture::find($id);
        $data->delete();
        return redirect('admin/course-video')->with('deleted','Successfully Deleted!');
    }
    
}
