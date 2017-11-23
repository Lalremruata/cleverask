<?php

Route::get('forum', 'User\PostController@forum')->name('forum');
Route::post('/post.store', 'User\PostController@createPost')->name('post.store');
Route::get('/create-thread', 'User\HomeController@createThread')->name('create-thread')->middleware('auth');

Route::group(['middleware' => ['web']] , function(){
    Route::get('/', 'User\HomeController@index')->name('home');
    Route::get('/post/{slug}', 'User\PostController@post')->name('post');
    Route::post('/signup', 'User\UserController@postSignUp')->name('signup');
    Route::post('/signin', 'User\UserController@postSignIn')->name('signin');
    Route::post('/logout', 'User\UserController@getLogout')->name('logout');
    Route::get('/settings', 'User\UserController@getSettings')->name('settings')->middleware('auth');

//    Route::resource('post.store', 'User\PostController');

    Route::post('/updateProfile', 'User\UserController@updateProfile')->name('profile.save');
    Route::view('/password', 'user/password')->name('settings/password');
    Route::view('/password', 'user/password')->name('settings/password');
    Route::get('/userimage/{filename}', 'User\UserController@getUserImage')->name('account.image');
    Route::get('dashboard', [
        'uses' => 'User\UserController@getDashBoard',
        'as' => 'dashboard',
        'middleware' => 'auth'
    ]);
});

Route::get('login', 'User\HomeController@login')->name('login');
Route::get('about', 'User\HomeController@about')->name('about');
Route::get('contact-us', 'User\HomeController@contactUs')->name('contact-us');



//Route::resource('user/post', 'Admin\PostController');


Route::get('register', function() {
    return view ('register');
})->name('register');
