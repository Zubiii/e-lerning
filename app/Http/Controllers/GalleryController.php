<?php

namespace App\Http\Controllers;

use App\Models\AboutUsModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data['about']              =   AboutUsModel::get();                //get About us Information
        $data['page']               =   "Gallery";
        return view('App', $data);
    }
}
