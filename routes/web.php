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

Route::get('/', 'HomeController@index');
Route::get('/account_type', 'HomeController@account_type');
Route::get('/register', 'HomeController@register');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/email/verify');
})->middleware(['auth', 'signed'])->name('verification.verify');
Auth::routes();
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', 'DashboardController@index');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
