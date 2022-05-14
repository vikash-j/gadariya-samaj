<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\mdlLogin;
use App\Http\Middleware\mdlHash;

class ctrComingsoon extends Controller{
	/* ***** HIstory Page ***** */
	public function comingsoon(Request $request){
        return view('comingsoon');
    }
    public function sendmail(Request $request){
        echo "test";exit;
        $data = array('name'=>$request->name,'emailid'=>$request->email,'phone'=>$request->phone,'message'=>$request->message);
        Mail::send('emails.contact',$data, function ($message) {
        			$message->from('info@gadariyasamaj.com','Gadariya Samaj');
        			$message->to('info@gadariyasamaj.com');
        			$message->subject('Contact form submitted on gadariyasamaj.com ');
         		});
        //return view('conatctus')->with('success','Mail send successful');
    }
}
