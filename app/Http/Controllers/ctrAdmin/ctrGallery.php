<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrGallery extends Controller{
	/* ***** Home Page ***** */
	public function home(Request $request){
        return view('admin-view.home');
    }
	/* ***** About-Us Page ***** */
	public function gallery(Request $request){
        return view('admin-view.home');
    }
}
