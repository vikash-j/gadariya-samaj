<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrAslider extends Controller{
	/* ***** Home Page ***** */
	public function slider(Request $request){
        return view('admin-view.slider');
    }
	/* ***** About-Us Page ***** */
	
}
