<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
class CourseController extends Controller
{
    public function index(){
        return view('pages.course.index');
    }
}
