<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
class ClassesController extends Controller
{
    //
    public function index()
    {
        return Classes::all();
    }

    public function createClass(Request $request)
    {
        // $this->validate($request,['grade'=>'required','body'=>'required']);
        $class = new Classes();
        $class->grade = $request->input('grade');
        $class->counter = $request->input('counter');
        $class->save();
        return "success";
    }
}