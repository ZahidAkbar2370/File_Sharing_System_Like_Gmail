<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('user-inbox');
    }

    public function updateProfile(Request $request)
    {
        $user_id = Auth::user()->id;

        $update_profile = DB::update("update users SET name='$request->name' where id='$user_id'");

        return redirect('user-profile');
    }
}
