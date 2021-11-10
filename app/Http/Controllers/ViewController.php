<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    function showETS(){
        return view('ets');
    }

    
    function showTugasPHP(){
        return view('tugasphp');
    }

    
    function TugasPHPresult(Request $request){
        return view('tugasphpresult');
    }
}
