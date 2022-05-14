<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrLsevent extends Controller{
	/* ***** HIstory Page ***** */
	public function lsevent(Request $request){
        return view('lsevent');
    }
}
