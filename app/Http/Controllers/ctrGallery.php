<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\mdlLogin;
use App\Http\Middleware\mdlHash;

class ctrGallery extends Controller{
	/* ***** HIstory Page ***** */
	public function gallery(Request $request){
        return view('gallery');
    }
}
