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

Route::get('/', 'MainPage@index');
Route::get('/vfx-beauty', 'ContentController@show');
Route::get('/color-correction', 'ContentController@show');
Route::get('/vr', 'ContentController@show');
Route::get('/post_production_archive', 'ContentController@show');
Route::get('/recent', 'ContentController@show');
Route::get('/bts', 'ContentController@show');
Route::get('/production_archive', 'ContentController@show');
Route::get('/company-reels', 'ContentController@show');


Route::get('/vfx-beauty/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
/* Route::get('/vfx-beauty', function () {
  return view('ContentViews/content');
  }); */
/* Route::get('/color-correction', function () {
  return view('ContentViews/content');
  }); */
Route::get('/color-correction/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
/* Route::get('/vr', function () {
  return view('ContentViews/content');
  }); */
Route::get('/vr/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
/* Route::get('/post_production_archive', function () {
  return view('ContentViews/content');
  }); */
Route::get('/post_production_archive/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
/* Route::get('/recent', function () {
  return view('ContentViews/content');
  }); */
Route::get('/recent/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
/* Route::get('/bts', function () {
  return view('ContentViews/content');
  }); */
/* Route::get('/production_archive', function () {
  return view('ContentViews/content');
  }); */
Route::get('/production_archive/{id}', function () {
    return view('fullcontent/fullcontentlayout');
});
/* Route::get('/company-reels', function () {
  return view('ContentViews/content');
  }); */
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
Route::post('/careers', 'UsersController@usersadd');
Route::get('/contact', function () {
    return view('contact/contact');
});
Route::get('/blog', function () {
    return view('blog/blog');
});
Route::get('/blog/{id}', function () {
    return view('blog/blogfullinfo');
});
Route::get('/admin', 'AdminController@show');
Route::post('/admin', 'AdminController@authoriz');
/* Route::get('/admin/{id}', function () {
  return view('adminpanel/panell');
  }); */
//Route::get('/upload', 'AdminController@autoload');
//Route::post('/store', 'AdminController@store');
//Route::get('/see', 'AdminController@see');

Route::post('/admin/mainbackround', 'MainPage@addimage');
Route::get('/admin/mainbackround', 'MainPage@show');
Route::get('/admin/main', 'MainPage@show');
Route::post('/admin/main', 'MainPage@mainbackground');
Route::get('/admin/mainmenu', 'MainMenuController@index');
Route::post('/admin/mainmenu', 'MainMenuController@mainmenuadd');
Route::get('/admin/secondmenu', 'SecondMenuController@index');
Route::post('/admin/secondmenu', 'SecondMenuController@adddeleteupdate');
Route::get('/admin/content', 'ContentController@index');
Route::post('/admin/content', 'ContentController@index');
Route::get('/admin/deletecontent', 'ContentController@deletecontent');
Route::get('/admin/updatecontent', 'ContentController@updatecontent');
Route::post('/admin/updatecontent', 'ContentController@updatecontent');
Route::post('/admin/deletecontent', 'ContentController@deletecontent');
Route::get('/admin/contentfon', 'ContentController@background');
Route::post('/admin/contentfon', 'ContentController@background');
Route::get('/admin/blogadd', 'BlogController@index');
Route::get('/admin/blogdelete', 'BlogController@index');
Route::get('/admin/blogupdate', 'BlogController@index');
Route::post('/admin/blogadd', 'BlogController@add');
Route::post('/admin/blogupdate', 'BlogController@update');
Route::post('/admin/blogdelete', 'BlogController@del');
Route::get('/admin/leadershipadd', 'LeadershipController@index');
Route::get('/admin/leadershipdel', 'LeadershipController@index');
Route::get('/admin/leadershipupdate', 'LeadershipController@index');
Route::post('/admin/leadershipadd', 'LeadershipController@add');
Route::post('/admin/leadershipdel', 'LeadershipController@del');
Route::post('/admin/leadershipupdate', 'LeadershipController@update');
Route::post('/exit', 'AdminController@exitadmin');
Route::get('/exit', 'AdminController@exitadmin');
Route::get('/admin/usersinfo', 'UsersController@index');


//Route::post('/admin/mainbackround', 'MainPage@index');

//Route::post('/admin/mainpage', 'MainPage@mainbackground');
//Route::get('/admin/mainpage', 'MainPage@show');



//Route::get('/admin/gege', 'MainPage@mainbackground');
/*Route::post('/admin/mainpagebackground', function () {
    return Redirect::to('user/profile');
});*/



