<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Bus;
class busController extends Controller
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
        return view('buses.createBus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'place'=>'required',
            'price'=>'required',
            //'unit'         => 'required'
        ]);
        $bus = new Bus;
        $bus->price = $request->input('price');
        $bus->place = $request->input('place');
        $bus->save();
        return view('buses.createBus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bus = Bus::find($id);
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        //return $user->bus_id;
        if ($bus->id == $user->bus_id)
            return "error";
        else{
            //return 123;
            return view('buses.pokeBus')->with('bus',$bus);
        }
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
        //
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

    public function listForSubscrib()
    {
        $buses = Bus::all();
        return view('buses.listBuses')->with('buses',$buses);
    }
}
