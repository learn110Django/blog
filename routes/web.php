<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;

Route::get('/', function () {
    return view('website.index');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/services', function () {
    return view('website.services');
});

Route::get('/portfolio', function () {
    return view('website.portfolio');
});




// User

Route::group(['namespace' => 'User'],function(){
    
    Route::get('/blog','HomeController@blog')->name('blog');
    // Route::get('/Tags','HomeController@get_tag_posts')->name('alltags');
    Route::get('post/{post}','PostController@post')->name('post');
	Route::get('post/tag/{tag}','TagController@tag')->name('tags');
	Route::get('post/category/{category}','CategoryController@category')->name('categories');
    
});


// Admin

Route::group(['namespace'=>'Admin','middleware'=>'auth:admin'],function(){
    Route::get('admin/home','HomeController@index')->name('admin.home');
    Route::resource('admin/post','PostController');
    Route::resource('admin/user','UserController');
    Route::resource('admin/role','RoleController');
    Route::resource('admin/permission','PermissionController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','categoryController');
     
});

//admin auth route

Route::get('admin-login',[LoginController::class,'showLoginForm'])->name('admin.login');
Route::post('admin-login',[LoginController::class,'login']);








