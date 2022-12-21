<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');

    }
    public function about(){
        $title = 'about us page hi';
        $body='this is my about us page';
        return view('pages.about' ,compact('title','body') );
       // return $title;
    }

    public function users($id){
        $name ="ved prakash".$id;
        return view('pages.users' , compact('name'));
    }
}
