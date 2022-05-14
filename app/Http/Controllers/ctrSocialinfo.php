<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrSocialinfo extends Controller{
	/* ***** Home Page ***** */
	public function socialinfo(Request $request){
        return view('assemblyhead');
    }
	/* ***** About-Us Page ***** */
	public function aboutus(Request $request){
        return view('wed-view.aboutus');
    }
}
