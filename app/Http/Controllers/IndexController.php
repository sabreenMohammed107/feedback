<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Students_feedback;

class IndexController extends Controller
{
    public function index(){
        return view('home.index');
    }


    public function sendMessage(Request $request){



             $opp=Students_feedback::create($request->all());


              return redirect()->back()->with('message', 'Thanks; your feedback has been submitted successfully !');





    }
}
