<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\mdlLogin;
use App\Http\Middleware\mdlHash;

class ctrContactUs extends Controller{
	/* ***** HIstory Page ***** */
	public function contactus(Request $request){
        return view('contactus');
    }
}
