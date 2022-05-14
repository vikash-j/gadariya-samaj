<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrHdstate extends Controller{
	/* ***** HIstory Page ***** */
	public function hdstate(Request $request){
        return view('hdstate');
    }
}
