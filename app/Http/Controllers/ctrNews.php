<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\mdlLogin;
use App\Http\Middleware\mdlHash;

class ctrNews extends Controller{
	/* ***** HIstory Page ***** */
	public function news(Request $request){
        return view('news');
    }
}
