<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/config', 'App\Http\Controllers\ConfigController@index')->name('config');
Route::put('/config/update/{id}', 'App\Http\Controllers\ConfigController@update')->name('config.update');

Route::group(['namespace' => 'App\Http\Controllers\Profile'], function (){ 
	Route::get('/profile', 'ProfileController@index')->name('profile');
	Route::put('/profile/update/profile/{id}', 'ProfileController@updateProfile')->name('profile.update.profile');
	Route::put('/profile/update/password/{id}', 'ProfileController@updatePassword')->name('profile.update.password');
	Route::put('/profile/update/avatar/{id}', 'ProfileController@updateAvatar')->name('profile.update.avatar');
});

Route::group(['namespace' => 'App\Http\Controllers\Slider'], function (){ 
	Route::get('/slider', 'SliderController@index')->name('slider');
	Route::get('/slider/create', 'SliderController@create')->name('slider.create');
	Route::get('/slider/store', 'SliderController@store')->name('slider.store');
	Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
	Route::put('/slider/update/{id}', 'SliderController@update')->name('slider.update');
	Route::get('/slider/destroy/{id}', 'SliderController@destroy')->name('slider.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Testimonial'], function (){ 
	Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
	Route::get('/testimonial/create', 'TestimonialController@create')->name('testimonial.create');
	Route::post('/testimonial/store', 'TestimonialController@store')->name('testimonial.store');
	Route::get('/testimonial/edit/{id}', 'TestimonialController@edit')->name('testimonial.edit');
	Route::put('/testimonial/update/{id}', 'TestimonialController@update')->name('testimonial.update');
	Route::get('/testimonial/destroy/{id}', 'TestimonialController@destroy')->name('testimonial.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Tours'], function (){ 
	Route::get('/tour', 'ToursController@index')->name('tour');
	Route::get('/tour/create', 'ToursController@create')->name('tour.create');
	Route::post('/tour/store', 'ToursController@store')->name('tour.store');
	Route::get('/tour/edit/{id}', 'ToursController@edit')->name('tour.edit');
	Route::put('/tour/update/{id}', 'ToursController@update')->name('tour.update');
	Route::get('/tour/destroy/{id}', 'ToursController@destroy')->name('tour.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Car'], function (){ 
	Route::get('/car', 'CarController@index')->name('car');
	Route::get('/car/create', 'CarController@create')->name('car.create');
	Route::post('/car/store', 'CarController@store')->name('car.store');
	Route::get('/car/edit/{id}', 'CarController@edit')->name('car.edit');
	Route::put('/car/update/{id}', 'CarController@update')->name('car.update');
	Route::get('/car/destroy/{id}', 'CarController@destroy')->name('car.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Feedback'], function (){ 
	Route::get('/feedback', 'FeedbackController@index')->name('feedback');
	Route::get('/feedback/create', 'FeedbackController@create')->name('feedback.create');
	Route::post('/feedback/store', 'FeedbackController@store')->name('feedback.store');
	Route::get('/feedback/edit/{id}', 'FeedbackController@edit')->name('feedback.edit');
	Route::put('/feedback/update/{id}', 'FeedbackController@update')->name('feedback.update');
	Route::get('/feedback/destroy/{id}', 'FeedbackController@destroy')->name('feedback.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Error'], function (){ 
	Route::get('/unauthorized', 'ErrorController@unauthorized')->name('unauthorized');
});

Route::group(['namespace' => 'App\Http\Controllers\User'], function (){ 
	//Users
	Route::get('/user', 'UserController@index')->name('user');
	Route::get('/user/create', 'UserController@create')->name('user.create');
	Route::post('/user/store', 'UserController@store')->name('user.store');
	Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
	Route::put('/user/update/{id}', 'UserController@update')->name('user.update');
	Route::get('/user/edit/password/{id}', 'UserController@editPassword')->name('user.edit.password');
	Route::put('/user/update/password/{id}', 'UserController@updatePassword')->name('user.update.password');
	Route::get('/user/show/{id}', 'UserController@show')->name('user.show');
	Route::get('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
	// Roles
	Route::get('/role', 'RoleController@index')->name('role');
	Route::get('/role/create', 'RoleController@create')->name('role.create');
	Route::post('/role/store', 'RoleController@store')->name('role.store');
	Route::get('/role/edit/{id}', 'RoleController@edit')->name('role.edit');
	Route::put('/role/update/{id}', 'RoleController@update')->name('role.update');
	Route::get('/role/show/{id}', 'RoleController@show')->name('role.show');
	Route::get('/role/destroy/{id}', 'RoleController@destroy')->name('role.destroy');
});