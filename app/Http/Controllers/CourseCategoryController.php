<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Illuminate\Support\Str;

class CourseCategoryController extends Controller
{
    public function index()
    {
        $data['courseCategories']   = CourseCategory::get();
        $data['page']    = "Course-Category";

        return view('Admin.App', $data);
    }
    
    public function store(Request $request)
    {
        $data               =   new CourseCategory;
        $data->name         =   $request->name;
        $data->slug         =   str_slug($request->name, '-');
        $data->save();

        return redirect('admin/course-category')->with('status','Course Added Successfully!');
    }
}
