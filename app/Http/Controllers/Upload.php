<?php

namespace App\Http\Controllers;

use App\Homeworks;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Upload extends Controller
{
    public function add(Request $request)
    {
      if($request->ismethod('post'))
          {
              $this->validate($request,[
                 'name' => 'required',
                 'file' => 'required'
              ]);
            $hw = new Homeworks();
            $hw->name = $request->input('name');
            $hw->subject = 1;
            $hw->file = $request->file('file')->store('upload') ;
            $hw->save();
            return ;
          }
    }
}
