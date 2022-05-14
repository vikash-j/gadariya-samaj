<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrAcategory extends Controller{
	/* ***** Home Page ***** */
	public function category(Request $request){
        return view('admin-view.category');
    }
	/* ***** About-Us Page ***** */
	
}
