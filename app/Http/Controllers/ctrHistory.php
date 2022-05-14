<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\mdlLogin;
use App\Http\Middleware\mdlHash;

class ctrHistory extends Controller{
	/* ***** HIstory Page ***** */
	public function history(Request $request){
        return view('history');
    }
}
