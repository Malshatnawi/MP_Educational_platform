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




// Categories Routes
Route::get('/categories/create','CategoryController@create')->middleware('auth:admin');
Route::post('/categories','CategoryController@store');
Route::delete('/categories/{category}','CategoryController@destroy');
Route::get('/categories/{category}/edit','CategoryController@edit')->middleware('auth:admin');
Route::put('/categories/{category}','CategoryController@update');
// Homepage Route
Route::get('/','CategoryController@index')->name('homepage');
//Grid Page
Route::get('/categories/{category}','CategoryController@show');





// Courses Routes
Route::get('/courses/create','CourseController@create')->middleware('auth:admin');
Route::post('/courses','CourseController@store');
Route::delete('/courses/{course}','CourseController@destroy');
Route::get('/courses/{course}/edit','CourseController@edit')->middleware('auth:admin');
Route::put('/courses/{course}','CourseController@update');
//single course
Route::get('/courses/{course}','CourseController@show');
//course add to cart 
Route::post('/addtocart/{course}','CourseController@AddToCart')->name('course.addtocart');
//go to cart
Route::get('/cart' , 'CourseController@getCart')->name('cart');
//delete from cart
Route::get('cart/{key}/delete', 'CourseController@deleteFromCart')->name('deleteFromCart');
//go to checkout
Route::get('/checkout' , 'CourseController@getCheckout')->middleware('auth');
//go to charge
Route::post('/charge' , 'CourseController@getCharge');
//search courses
Route::get('/search','CourseController@search');





// Units Routes
Route::get('/units/create','UnitController@create')->middleware('auth:admin');
Route::post('/units','UnitController@store')->middleware('auth:admin');
Route::delete('/units/{unit}','UnitController@destroy')->middleware('auth:admin');
Route::get('/units/{unit}/edit','UnitController@edit')->middleware('auth:admin');
Route::put('/units/{unit}','UnitController@update')->middleware('auth:admin');



// Lessons Routes
Route::get('/lessons/create','LessonController@create')->middleware('auth:admin');
Route::post('/lessons','LessonController@store')->middleware('auth:admin');
Route::delete('/lessons/{lesson}','LessonController@destroy')->middleware('auth:admin');
Route::get('/lessons/{lesson}/edit','LessonController@edit')->middleware('auth:admin');
Route::put('/lessons/{lesson}','LessonController@update')->middleware('auth:admin');




// Admins Routes
Route::get('/admins/create','AdminController@create')->name('admin.dashboard');
Route::post('/admins','AdminController@store');
Route::delete('/admins/{admin}','AdminController@destroy');
Route::get('/admins/{admin}/edit','AdminController@edit');
Route::put('/admins/{admin}','AdminController@update');



// Users Routes
Route::get('/users/create','UserController@create')->name('user.dashboard')->middleware('auth:admin');
Route::post('/users','UserController@store');
Route::delete('/users/{user}','UserController@destroy')->middleware('auth:admin');
Route::get('/users/{user}/edit','UserController@edit')->middleware('auth:admin');
Route::put('/users/{user}','UserController@update')->middleware('auth:admin');










//Auth Routes
Auth::routes();

Route::get('/login' , 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/register' , 'Auth\RegisterController@showRegisterForm')->name('register');
// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

    Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/logout' , 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
    Route::post('/login' , 'Auth\AdminLoginController@admin_login')->name('admin.login.submit');
    // Route::get("/", "AdminController@show")->name('admin.dashboard');

    //password reset routes
    Route::post('/password/email' , 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset' , 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset' , 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}' , 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    
    
    });








// Orders Routes
Route::get('/orders','OrderController@index')->name('order.index')->middleware('auth');
Route::get('/orders/create','OrderController@create')->name('order.dashboard')->middleware('auth:admin');





