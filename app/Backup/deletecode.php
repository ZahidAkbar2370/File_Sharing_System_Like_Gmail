<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class deletecode extends Controller
{
   public function index()
   {
   		 $all_mails = DB::select("select * from mails");
       dd($all_mails);

   }


}
