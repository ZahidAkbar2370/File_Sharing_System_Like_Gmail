<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('user-profile', function () {
    return view('User/Profile/profile');
});
Route::post('user-update-profile',"HomeController@updateProfile");
// Route::get('user-inbox', function () {
//     return view('User/Inbox/inbox');
// });
Route::get('user-compose-mail',"MailController@composeMail");
Route::post('user-save-compose-mail',"MailController@composeSaveMail");
Route::get('user-inbox',"MailController@index");
Route::get('user-sent',"MailController@sentMail");
Route::get('user-bin',"MailController@viewBin");
Route::get('delete-mail/{id}',"MailController@deleteMail");

Route::get('backup-mail/{id}',"MailController@backupMail");






Route::get('admin-layout', function () {
    return view('Admin/admin_layout');
});

Route::get('admin-dashboard', function () {
    return view('Admin/Dashboard/dashboard');
});


Route::get('admin-view-recived-mails',"AdminController@index");

Route::get('admin-view-active-mails',"AdminController@activeMails");

Route::get('admin-view-delete-mails',"AdminController@deleteMails");

Route::get('admin-view-users',"AdminController@allUsers");

Route::get("admin-delete-user/{id}","AdminController@deleteUser");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
