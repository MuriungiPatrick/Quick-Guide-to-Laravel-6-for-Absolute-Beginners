<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::prefix('page')->group(function() {
  Route::get('/aboutus', 'PageController@aboutus')->name('about');//About us View
  Route::get('/webdesign', 'PageController@webdesign')->name('services.webdesign');//Webdesign view
});
// Route::get('/', 'PageController@index');//Welcome View


Route::get('/', 'JobController@index');// The Jobs homepage
Route::get('/jobs/{job}', 'JobController@show')->name('jobs.show');// The Jobs Details View


Route::get('/quotes/index', 'QuoteController@index');// The quotes homepage
Route::get('/quotes/show', 'QuoteController@show')->name('quotes.show');// The quotes Details View

Auth::routes(['verify' => true]);

// Profile Avatar
Route::get('/profilepicture', 'ProfileController@getProfileAvatar')->name('profileavatar');
Route::post('/profilepicture', 'ProfileController@profilePictureUpload')->name('profileavatar');
// Change Password
Route::get('/changepassword', 'ProfileController@changePasswordForm')->name('changepassword');
Route::post('/changepassword', 'ProfileController@changePassword')->name('changepassword');
//Profile Settings
Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/profileupdate', 'ProfileController@profileUpdate')->name('profileupdate');
//Dashboard Home
Route::get('/home', 'HomeController@index')->name('home');
// RESTFUL CONTROLLER
Route::resource('/dashboard', 'DashboardController');
