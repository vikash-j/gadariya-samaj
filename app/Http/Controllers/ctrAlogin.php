<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrAlogin extends Controller{
	/* ***** Home Page ***** */
	public function login(Request $request){
        return view('admin-view.login');
    }
	/* ***** About-Us Page ***** */
	
}
