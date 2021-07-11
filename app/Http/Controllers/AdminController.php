<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
   public function index()
   {
   		 $all_mails = DB::select("select * from mails");

    		return view("Admin/RecivedMails/view_recived_mails")->with("all_mails",$all_mails);

   }

   public function activeMails()
   {
   		 $all_mails = DB::select("select * from mails where status='active'");

    		return view("Admin/ActiveMails/view_active_mails")->with("all_mails",$all_mails);

   }

   public function deleteMails()
   {
   		 $all_mails = DB::select("select * from mails where status='delete'");

    		return view("Admin/DeleteMails/view_delete_mails")->with("all_mails",$all_mails);

   }

   public function allUsers()
   {
   		 $all_users = DB::select("select * from users");

    		return view("Admin/User/view_users")->with("all_users",$all_users);

   }


   public function deleteUser($id)
   {
   		$delete_user = DB::delete("delete from users where id='$id'");

    		return redirect('admin-view-users');
   }

}
