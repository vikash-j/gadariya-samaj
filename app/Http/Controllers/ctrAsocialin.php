<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrAsocialin extends Controller{
	/* ***** Home Page ***** */
	public function socialinfo(Request $request){
        return view('admin-view.socialinfo');
    }
	/* ***** About-Us Page ***** */
	
}
