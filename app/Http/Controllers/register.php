<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    //
    public function index()  {
        return view("home");
    
    }
    
    
    public function register(Request $request)  {
        echo"<pre>";
      print_r($request->all());
    
    
    }
    
    
}
