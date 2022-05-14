<?php
namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class mdlHash extends Model{
	// get md5 encryption result
	public static function getMD5($data){
		$value = md5($data);
		return $value;
	}
	// get sha256 hash result without salt value
	public static function getHash256($data){
		$value = hash("sha256",$data,FALSE);
		return $value;
	}
	// get sha512 hash result without salt value
	public static function getHash512($data){
		$value = hash("sha512",$data,FALSE);
		return $value;
	}
	// get salt value
	public static function getSaltValue($table){
		$value = getRandomString(12);
		return $value;
	}
	// get random string
	public static function getRandomString($limit){
		$characters = '@012345!6789a#bcde fghijkl)mnop(qrstuvwxyz_ABCDEFGHIJKLMNO+PQRSTU.VWXYZ=';
    	$value = '';

	    for ($i = 0; $i < $limit; $i++) {
	        $substr = rand(0, strlen($characters) - 1);
	        $value .= $characters[$index];
	    }
		return $value;
	}
}

/*
  //Reg_id
  $salt_value1 = "CirCuiT_gk";
  $salt_value2 = "@N#g0W$/k06kI";

  $owner_name = "Geshwar Kumar Dhankar";
  $web_url = "geshwar.mentorboy.com";
  $my_website = "mentorboy.com";

  //md5 encryption
  $enc_salt_value1 = md5($salt_value1);
  $enc_salt_value2 = md5($salt_value2);

  $enc_owner_name = md5($owner_name);
  $enc_web_url = md5($web_url);
  $enc_my_website = md5($my_website);

  //hash hash256
  $hs_salt_value1 = hash("sha256",$enc_salt_value1,FALSE);
  $hs_salt_value2 = hash("sha256",$enc_salt_value2,FALSE);

  $hs_owner_name = hash("sha256",$enc_owner_name,FALSE);
  $hs_web_url = hash("sha256",$enc_web_url,FALSE);
  $hs_my_website = hash("sha256",$enc_my_website,FALSE);

  //add common values hash256
  $hs_reg_before = hash("sha256",$hs_owner_name.$hs_web_url.$hs_my_website);
  $hs_salt_value = hash("sha256",$hs_salt_value2.$hs_salt_value1);

  //reg id hash256
  $reg_id = hash("sha256",$hs_reg_before.$hs_salt_value);
  echo "enc= ".$reg_id."<br>hash= ".$hs_reg_before;

  //password
  $email_id = "geshwar.d@aanandi.co.in";
  $password = "Geshwar006@";

  //md5
  $enc_email_id = md5($email_id);
  $enc_password = md5($password);

  //sha1 of enc
  $hs1_email_id = sha1($enc_email_id,TRUE);
  $hs1_password = sha1($enc_password,TRUE);

  //sha256 of sha1
  $hs2_email_id = hash("sha256",$hs1_email_id);
  $hs2_password = hash("sha256",$hs1_password);

  //sha512
  $hs_password_before = hash("sha512",$hs2_password.$hs2_email_id);

  //password
  $password = hash("sha256",$hs_password_before.$hs_salt_value);

  echo "<br>sha512= ".$hs_password_before."<br>pass= ".$password;

*/
