<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class regerrordisplay extends Controller
{
    //errors concept
   function getshow(){
       print_r('GET_DATA');
        return view('regerrordisplay');
   }
   function postshow(Request $request){
        $validate=$request->validate([
            'email'=>'required|min:10',
            'password'=>'required',
        ]);
        $input=$request->except('_token');
        print_r('POST_DATA');
    return view('regerrordisplay',['data'=>$input]);
   }
}
