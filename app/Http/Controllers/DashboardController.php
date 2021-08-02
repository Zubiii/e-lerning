<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutUsModel;
use App\Models\SubjectModel;
use App\Models\students;
use App\Models\teacher;
use App\Models\university;
use App\Models\course;
use App\Models\testimonial;

class DashboardController extends Controller
{
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
        $data['page']               =   "Dashboard";

        // return json_encode($data);
        return view("Admin.App", $data);
    }
}
