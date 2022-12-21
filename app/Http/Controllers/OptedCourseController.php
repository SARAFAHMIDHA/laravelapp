<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\optedcourse;
class OptedCourseController extends Controller
{
    //
    public function index(){
        return view('pages.optedcourse.index');
    }

}
