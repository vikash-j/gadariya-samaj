<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrAplacemaster extends Controller{
	/* ***** Home Page ***** */
	public function placemaster(Request $request){
        return view('admin-view.placemaster');
    }
	/* ***** About-Us Page ***** */
	
}
