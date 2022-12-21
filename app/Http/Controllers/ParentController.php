<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parenttbl;
class ParentController extends Controller
{
    //
    public function index()
    {
        $parent = parenttbl::all();
        return view('pages.parent.index' , compact('parent'));
    }
}
