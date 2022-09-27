<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Frontend Routrs
Route::get('/', 'App\Http\Controllers\Front\HomeController@index')->name('frontend.index');
Route::get('/itineraries', 'App\Http\Controllers\Front\HomeController@itineraries')->name('frontend.itineraries');
Route::get('/car-rental', 'App\Http\Controllers\Front\HomeController@car_rental')->name('frontend.car_rental');
Route::get('/car_rental_details/{id}', 'App\Http\Controllers\Front\HomeController@car_rental_details')->name('frontend.car_rental_details');
Route::get('/explore', 'App\Http\Controllers\Front\HomeController@feedbacks')->name('frontend.feedback');
Route::get('/explore-details/{id}', 'App\Http\Controllers\Front\HomeController@feedback_details')->name('frontend.feedback_details');
Route::get('/itineraries_details', 'App\Http\Controllers\Front\HomeController@itineraries_details')->name('frontend.itineraries_details');

Auth::routes();

Route::get('/admin', 'App\Http\Controllers\HomeController@index');
Route::get('admin/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('admin/config', 'App\Http\Controllers\ConfigController@index')->name('config');
Route::put('admin/config/update/{id}', 'App\Http\Controllers\ConfigController@update')->name('config.update');

Route::group(['namespace' => 'App\Http\Controllers\Profile'], function (){ 
	Route::get('admin/profile', 'ProfileController@index')->name('profile');
	Route::put('admin/profile/update/profile/{id}', 'ProfileController@updateProfile')->name('profile.update.profile');
	Route::put('admin/profile/update/password/{id}', 'ProfileController@updatePassword')->name('profile.update.password');
	Route::put('admin/profile/update/avatar/{id}', 'ProfileController@updateAvatar')->name('profile.update.avatar');
});

Route::group(['namespace' => 'App\Http\Controllers\Slider'], function (){ 
	Route::get('admin/slider', 'SliderController@index')->name('slider');
	Route::get('admin/slider/create', 'SliderController@create')->name('slider.create');
	Route::post('admin/slider/store', 'SliderController@store')->name('slider.store');
	Route::get('admin/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
	Route::put('admin/slider/update/{id}', 'SliderController@update')->name('slider.update');
	Route::get('admin/slider/destroy/{id}', 'SliderController@destroy')->name('slider.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Testimonial'], function (){ 
	Route::get('admin/testimonial', 'TestimonialController@index')->name('testimonial');
	Route::get('admin/testimonial/create', 'TestimonialController@create')->name('testimonial.create');
	Route::post('admin/testimonial/store', 'TestimonialController@store')->name('testimonial.store');
	Route::get('admin/testimonial/edit/{id}', 'TestimonialController@edit')->name('testimonial.edit');
	Route::put('admin/testimonial/update/{id}', 'TestimonialController@update')->name('testimonial.update');
	Route::get('admin/testimonial/destroy/{id}', 'TestimonialController@destroy')->name('testimonial.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Tours'], function (){ 
	Route::get('admin/tour', 'ToursController@index')->name('tour');
	Route::get('admin/tour/create', 'ToursController@create')->name('tour.create');
	Route::post('admin/tour/store', 'ToursController@store')->name('tour.store');
	Route::get('admin/tour/edit/{id}', 'ToursController@edit')->name('tour.edit');
	Route::put('admin/tour/update/{id}', 'ToursController@update')->name('tour.update');
	Route::get('admin/tour/destroy/{id}', 'ToursController@destroy')->name('tour.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Car'], function (){ 
	Route::get('admin/car', 'CarController@index')->name('car');
	Route::get('admin/car/create', 'CarController@create')->name('car.create');
	Route::post('admin/car/store', 'CarController@store')->name('car.store');
	Route::get('admin/car/edit/{id}', 'CarController@edit')->name('car.edit');
	Route::put('admin/car/update/{id}', 'CarController@update')->name('car.update');
	Route::get('admin/car/destroy/{id}', 'CarController@destroy')->name('car.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Feedback'], function (){ 
	Route::get('admin/feedback', 'FeedbackController@index')->name('feedback');
	Route::get('admin/feedback/create', 'FeedbackController@create')->name('feedback.create');
	Route::post('admin/feedback/store', 'FeedbackController@store')->name('feedback.store');
	Route::get('admin/feedback/edit/{id}', 'FeedbackController@edit')->name('feedback.edit');
	Route::put('admin/feedback/update/{id}', 'FeedbackController@update')->name('feedback.update');
	Route::get('admin/feedback/destroy/{id}', 'FeedbackController@destroy')->name('feedback.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\details'], function (){ 
	Route::get('admin/details', 'detailcontroller@index')->name('details');
	Route::get('admin/details/create', 'detailcontroller@create')->name('details.create');
	Route::post('admin/details/store', 'detailcontroller@store')->name('details.store');
	Route::get('admin/details/edit/{id}', 'detailcontroller@edit')->name('details.edit');
	Route::put('admin/details/update/{id}', 'detailcontroller@update')->name('details.update');
	Route::get('admin/details/destroy/{id}', 'detailcontroller@destroy')->name('details.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\int_details'], function (){ 
	Route::get('admin/itineraries-details', 'Int_detailsController@index')->name('itineraries_details');
	Route::get('admin/itineraries-details/create', 'Int_detailsController@create')->name('itineraries_details.create');
	Route::post('admin/itineraries-details/store', 'Int_detailsController@store')->name('itineraries_details.store');
	Route::get('admin/itineraries-details/edit/{id}', 'Int_detailsController@edit')->name('itineraries_details.edit');
	Route::put('admin/itineraries-details/update/{id}', 'Int_detailsController@update')->name('itineraries_details.update');
	Route::get('admin/itineraries-details/destroy/{id}', 'Int_detailsController@destroy')->name('itineraries_details.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Error'], function (){ 
	Route::get('/unauthorized', 'ErrorController@unauthorized')->name('unauthorized');
});

Route::group(['namespace' => 'App\Http\Controllers\User'], function (){ 
	//Users
	Route::get('admin/user', 'UserController@index')->name('user');
	Route::get('admin/user/create', 'UserController@create')->name('user.create');
	Route::post('admin/user/store', 'UserController@store')->name('user.store');
	Route::get('admin/user/edit/{id}', 'UserController@edit')->name('user.edit');
	Route::put('admin/user/update/{id}', 'UserController@update')->name('user.update');
	Route::get('admin/user/edit/password/{id}', 'UserController@editPassword')->name('user.edit.password');
	Route::put('admin/user/update/password/{id}', 'UserController@updatePassword')->name('user.update.password');
	Route::get('admin/user/show/{id}', 'UserController@show')->name('user.show');
	Route::get('admin/user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
	// Roles
	Route::get('admin/role', 'RoleController@index')->name('role');
	Route::get('admin/role/create', 'RoleController@create')->name('role.create');
	Route::post('admin/role/store', 'RoleController@store')->name('role.store');
	Route::get('admin/role/edit/{id}', 'RoleController@edit')->name('role.edit');
	Route::put('admin/role/update/{id}', 'RoleController@update')->name('role.update');
	Route::get('admin/role/show/{id}', 'RoleController@show')->name('role.show');
	Route::get('admin/role/destroy/{id}', 'RoleController@destroy')->name('role.destroy');
});
	
