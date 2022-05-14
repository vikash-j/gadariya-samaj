<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrAevent extends Controller{
	/* ***** Home Page ***** */
	public function event(Request $request){
        return view('admin-view.event');
    }
	/* ***** About-Us Page ***** */
	
}
