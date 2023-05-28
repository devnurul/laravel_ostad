<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Democontroller extends Controller
{
    
   
    function newhit(Request $request){
        return $request->header();
    }
}

