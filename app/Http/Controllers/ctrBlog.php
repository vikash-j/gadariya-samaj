<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrBlog extends Controller{
	/* ***** HIstory Page ***** */
	public function blog(Request $request){
        return view('blogs');
    }
}
