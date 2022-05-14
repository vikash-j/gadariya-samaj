<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class mdlLogin extends Model{
	// get package info
	public static function getPackageInfoById($package_type){
		$value = DB::table('package_info')->where('package_type_id','=',$package_type)->get();
		return $value;
	}
}
