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
    return view('welcome');
});

Route::get('/vfx-beauty/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
Route::get('/vfx-beauty', function () {
    return view('ContentViews/content');
});
Route::get('/color-correction', function () {
    return view('ContentViews/content');
});
Route::get('/color-correction/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
Route::get('/vr', function () {
    return view('ContentViews/content');
});
Route::get('/vr/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
Route::get('/post_production_archive', function () {
    return view('ContentViews/content');
});
Route::get('/post_production_archive/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
Route::get('/recent', function () {
    return view('ContentViews/content');
});
Route::get('/recent/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
Route::get('/bts', function () {
    return view('ContentViews/content');
});
Route::get('/production_archive', function () {
    return view('ContentViews/content');
});
Route::get('/production_archive/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
Route::get('/company-reels', function () {
    return view('ContentViews/content');
});
Route::get('/leadership', function () {
    return view('leadership/leadership');
});
Route::get('/leadership/{id}', function () {
    return view('leadership/info');
});
Route::get('/awards', function () {
    return view('awards');
});
Route::get('/concert-art', function () {
    return view('concertart/concertart');
});
Route::get('/careers', function () {
    return view('careers/careers');
});
Route::get('/contact', function () {
    return view('contact/contact');
});
Route::get('/blog', function () {
    return view('blog/blog');
});
Route::get('/blog/{id}', function () {
    return view('blog/blogfullinfo');
});



