<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrAgallery extends Controller{
	/* ***** Home Page ***** */
	public function galery(Request $request){
        return view('admin-view.galery');
    }
	/* ***** About-Us Page ***** */
	
}
