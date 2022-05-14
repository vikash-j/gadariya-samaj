<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrGmlist extends Controller{
	/* ***** HIstory Page ***** */
	public function gmlist(Request $request){
        return view('gmlist');
    }
}
