<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrMetromonial extends Controller{
	/* ***** Home Page ***** */
	public function metromonial(Request $request){
        return view('wed-view.home');
    }
	/* ***** About-Us Page ***** */
	public function aboutus(Request $request){
        return view('wed-view.aboutus');
    }
}
