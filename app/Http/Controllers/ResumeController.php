<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ResumeController extends Controller
{
    //
    public function resume(Request $request){
           
            return view('resume');
        }
    public function test(){

        return view('test');
    }
}
