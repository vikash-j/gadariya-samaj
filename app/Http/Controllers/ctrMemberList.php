<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ctrMemberList extends Controller{
	/* ***** HIstory Page ***** */
	public function assemblychief(Request $request){
        return view('assemblyhead');
	}
	public function membershiplist(Request $request){
        return view('membershiphead');
    }
	public function rajchief(Request $request){
        return view('rajhead');
    }
	public function listofevents(Request $request){
		return view('listofhead');
	}	
}
