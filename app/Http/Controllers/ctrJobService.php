<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\mdlLogin;
use App\Http\Middleware\mdlHash;

class ctrJobService extends Controller{
	/* ***** HIstory Page ***** */
	public function jobservice(Request $request){
        return view('jobservice');
    }
}
