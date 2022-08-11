<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OuterController;
use App\Http\Controllers\UsersController;

Route::get('/', [OuterController::class, 'index']);

Route::controller(OuterController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/article/{id}', 'article_detail')->name('article_detail');
});

Route::controller(UsersController::class)->group(function () {
    Route::get('/login', 'login_form')->name('login_form');
    Route::post('/login', 'login_action')->name('login_action');
    // Route::get('/users/{id}', 'UsersController@show');

    Route::post('/article/add', 'article_add_action')->name('article_add_action');
    Route::post('/article/delete', 'article_delete_action')->name('article_delete_action');

    Route::get('/users', 'users_index')->name('users_index');
    Route::post('/users/add', 'users_add_action')->name('users_add_action');
    // Route::get('/users/edit/{id}', 'users_edit')->name('users_edit');
    // Route::post('/users/edit/{id}', 'users_edit_action')->name('users_edit_action');
    Route::post('/users/delete', 'users_delete_action')->name('users_delete_action');

    Route::get('/dashboard', 'dashboard_index')->name('dashboard_index');
    Route::post('/logout', 'dashboard_logout')->name('dashboard_logout');
});




// Route::get('/debug-sentry', function () {
//     throw new Exception('My first Sentry error!');
// });
