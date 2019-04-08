<?php

namespace App\Http\Controllers;
use App\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes=Classes::all();
        return view('Classes.Classes')->with('classes',$classes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Classes.Createclasses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,['grade'=>'required','counter'=>'required']);
        $class = new Classes();
        $class->grade = $request->input('grade');
        $class->counter = $request->input('counter');
        $class->NStudent = $request->input('NStudent');
        $class->Floor = $request->input('Floor');

        $class->save();
        return redirect('/Classes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Classes::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class=Classes::find($id);
        return view('Classes.Classesedit')->with('class',$class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return 123;
        //$this->validate($request,['grade'=>'required','counter'=>'required']);
        $class =Classes::find($id);
        //dd($class);
        $class->grade = $request->input('grade');
        $class->counter = $request->input('counter');
        $class->NStudent = $request->input('NStudent');
        $class->Floor = $request->input('Floor');
        $class->save();
        return redirect('/Classes');


        return '1';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
/*<?php

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
        //

    }
}*/
}
