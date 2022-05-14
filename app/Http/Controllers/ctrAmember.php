<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrAmember extends Controller{
	/* ***** Home Page ***** */
	public function member(Request $request){
        return view('admin-view.member');
    }
	/* ***** About-Us Page ***** */
	
}
