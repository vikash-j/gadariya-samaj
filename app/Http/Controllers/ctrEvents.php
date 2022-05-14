<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\mdlLogin;
use App\Http\Middleware\mdlHash;

class ctrEvents extends Controller{
	/* ***** HIstory Page ***** */
	public function events(Request $request){
        return view('events');
    }
}
