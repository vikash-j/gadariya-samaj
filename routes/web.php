<?php

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
	return view('home'); //default page
});
/* =========== Front Pages ========== */
Route::get('/history','ctrHistory@history');
Route::get('/events','ctrEvents@events');
Route::get('/news','ctrNews@news');
Route::get('/gallery','ctrGallery@gallery');
Route::get('/blogs','ctrBlog@blog');
Route::get('/contactus','ctrContactUs@contactus');
Route::get('/jobservices','ctrJobService@jobservice');
Route::get('/assemblychief','ctrMemberList@assemblychief');
Route::get('/membershiplist','ctrMemberList@membershiplist');
Route::get('/rajchief','ctrMemberList@rajchief');
Route::get('/listofevents','ctrMemberList@listofevents');
/* =========== Login ========== */
Route::post('/varifylogin','ctrMemberPanel@varifylogin');

/* =========== Wedding Services ========== */
Route::get('/metromonial','ctrMetromonial@metromonial');
Route::get('/metromonial/aboutus','ctrMetromonial@aboutus');
