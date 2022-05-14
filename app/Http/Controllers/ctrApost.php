<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrApost extends Controller{
	/* ***** Home Page ***** */
	public function post(Request $request){
        return view('admin-view.post');
    }
	/* ***** About-Us Page ***** */
	
}
