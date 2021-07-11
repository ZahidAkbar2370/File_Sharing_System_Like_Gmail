<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class MailController extends Controller
{
    public function index()
    {
    	$reciver_mail = Auth::user()->email;

		$user_all_mails = DB::select("select * from mails where reciver_mail='$reciver_mail' and status='active'");

    	return view("User/Inbox/inbox")->with("user_all_mails",$user_all_mails);
    }

    public function sentMail()
    {
    	$sender_mail = Auth::user()->email;

    	$user_all_send_mails = DB::select("select * from mails where sender_mail='$sender_mail' and status='active'");

    	return view("User/Sent/sent")->with("user_all_send_mails",$user_all_send_mails);
    }

    public function viewBin()
    {
    	$sender_mail = Auth::user()->email;

    	$user_all_bin_mails = DB::select("select * from mails where sender_mail='$sender_mail' and status='delete'");

    	return view("User/Bin/bin")->with("user_all_bin_mails",$user_all_bin_mails);
    }

    public function deleteMail($id)
    {
    	$update_mail_status = DB::update("update mails SET status='delete' where id='$id'");

    	return redirect('user-bin');
    }

    public function backupMail($id)
    {
    	$update_backup_status = DB::update("update mails SET status='active' where id='$id'");

    	return redirect('user-inbox');
    }

    public function composeMail()
    {
    	return view("User/Compose/compose");
    }

    public function composeSaveMail(Request $request)
    {
    	$insert_mail = DB::insert("insert into mails values(?,?,?,?,?,?,?,?,?)",[null,Auth::user()->email,$request->reciver_mail,$request->subject,$request->message,$request->file,"active","created_at",""]);

    	return redirect('user-sent');
    }

}
