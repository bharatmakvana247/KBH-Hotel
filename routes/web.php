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

Route::get('/register', function () {
    return view('register');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/rooms', function () {
    return view('rooms');
});
//route::get('/feedback', function () {
   // return view('feedback');
//});

Route::post('/validateData', 'ValidationController@validateData');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('feedback',FeedbackController::class);
Route::get('feedbacks', 'FeedbackController@index')->name('feedbacks.index');
Route::get('feedbacks/create', 'FeedbackController@create')->name('feedbacks.create');
Route::post('feedbacks', 'FeedbackController@store')->name('feedbacks.store');
Route::get('feedbacks/{id}/edit', 'FeedbackController@edit')->name('feedback.edit');
