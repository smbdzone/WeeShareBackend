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


//Frond end 
Route::get('/', 'HomeController@index')->name('home');
Route::get('/account_type', 'HomeController@account_type');
Route::get('/register', 'HomeController@register');
Route::get('/privacy_policy', 'HomeController@privacy_policy');
Route::get('/term_conduction', 'HomeController@term_conduction');
Route::get('/cookies_policy', 'HomeController@cookies_policy');
Route::get('/disclaimer', 'HomeController@disclaimer');
Route::get('/package', 'HomeController@package');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/email/verify');
})->middleware(['auth', 'signed'])->name('verification.verify');
Auth::routes();


Route::post('/postlogin',[App\Http\Controllers\Auth\LoginController::class,'postLogin'])->name('postLogin');
Route::middleware(['auth', 'verified'])->group(function () {
   
    Route::get('/step', 'HomeController@firstStep');
    Route::post('/first_step', 'HomeController@firstStepUpdate')->name('fist-step.update');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //Post
    Route::get('/media/list','MediaController@list');
    Route::get('/media','MediaController@index');
    Route::post('/media','MediaController@store');

    Route::group(['prefix'=>'facebook'], function(){
        Route::get('/','FacebookController@login');
        Route::get('/RollBack','FacebookController@rollback')->name('facebook.callback');
    });

    Route::group(['prefix'=>'instagram'], function(){
        Route::get('/','InstagramController@login');
        Route::get('/RollBack','InstagramController@rollback')->name('instagram.callback');
        Route::get('/post','InstagramController@uploadPost');
    });



});
