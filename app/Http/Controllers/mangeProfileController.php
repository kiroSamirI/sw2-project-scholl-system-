<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class mangeProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('mangeProfile')->with('user' , $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $user = User::find($id);
      
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        if($request->hasFile('image')){
            
            $file_full_name = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($file_full_name , PATHINFO_FILENAME);
            $extention = $request->file('image')->getClientOriginalExtension();
            $filenameStore = $filename . '_' . time() . $extention;
            $path = $request->file('image')->storeAs('public/images' , $filenameStore);
            $user->personal_photo = $filenameStore;
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect('/mangeProfile/'. auth()->user()->id);
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
}
