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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\Homecontroller@login');

Route::get('/admin/login','App\Http\Controllers\Homecontroller@login');

Route::get('/admin/forgot','App\Http\Controllers\Homecontroller@forgot');

Route::get('logout','App\Http\Controllers\Homecontroller@logout');
Route::post('checklogin','App\Http\Controllers\Homecontroller@checklogin');
Route::post('forgot','App\Http\Controllers\Homecontroller@forgotpassword');


Route::group(['middleware'=>['Customauth']],function(){
  Route::get('admin/dashboard','App\Http\Controllers\Homecontroller@dashboard');

  ### App Intro Video ###

  Route::get('admin/app_intro_video','App\Http\Controllers\Masters@app_intro_video');
  Route::post('save_intro_video','App\Http\Controllers\Masters@save_intro_video');

  ### Live events ###

  Route::get('admin/app_live_events','App\Http\Controllers\Masters@app_live_events');
  Route::post('save_live_events','App\Http\Controllers\Masters@save_live_events');
  Route::get('admin/get_live_events_edit/{id}','App\Http\Controllers\Masters@get_live_events_edit');
  Route::post('update_live_events','App\Http\Controllers\Masters@update_live_events');

  ### News Category ###

  Route::get('admin/news_category','App\Http\Controllers\Masters@news_category');


  ### Newsfeed Category ###

  Route::get('admin/create_newsfeed','App\Http\Controllers\Newsfeedcontroller@create_newsfeed');
  Route::post('save_newsfeed','App\Http\Controllers\Newsfeedcontroller@save_newsfeed');

  Route::get('admin/list_stories','App\Http\Controllers\Newsfeedcontroller@list_stories');
  Route::get('admin/list_posts','App\Http\Controllers\Newsfeedcontroller@list_posts');
  Route::get('admin/list_events','App\Http\Controllers\Newsfeedcontroller@list_events');

  Route::get('admin/get_edit_newsfeed/{id}','App\Http\Controllers\Newsfeedcontroller@get_edit_newsfeed');
  Route::post('update_newsfeed','App\Http\Controllers\Newsfeedcontroller@update_newsfeed');


  Route::get('admin/add_gallery_newfeed/{id}','App\Http\Controllers\Newsfeedcontroller@add_gallery_newfeed');
  Route::post('save_gallery_image','App\Http\Controllers\Newsfeedcontroller@save_gallery_image');
  Route::get('admin/delete_galley_image/{id}','App\Http\Controllers\Newsfeedcontroller@delete_galley_image');


  ### About OPS ###

  Route::get('admin/aboutops','App\Http\Controllers\Aboutopscontroller@aboutops');
  Route::post('save_personal_info','App\Http\Controllers\Aboutopscontroller@save_personal_info');


  ### Social media ###
  Route::get('admin/socialmedia','App\Http\Controllers\Aboutopscontroller@socialmedia');
  Route::post('admin/create_social_media_link','App\Http\Controllers\Aboutopscontroller@create_social_media_link');
  Route::get('admin/get_edit_socialmedia/{id}','App\Http\Controllers\Aboutopscontroller@get_edit_socialmedia');
  Route::post('admin/update_social_media_link','App\Http\Controllers\Aboutopscontroller@update_social_media_link');






























});
