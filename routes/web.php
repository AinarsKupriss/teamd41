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

Auth::routes();

//Home page
Route::get('/', function () {
    return view('welcome');
});

//Dashboard
Route::get('/home', 'HomeController@index')->name('home');

//Worker page
Route::prefix('worker')->group(function () {
    Route::get('/', 'WorkerController@getWorkerHome');

    Route::post('/register', 'WorkerController@createWorker');

    Route::get('/delete/{id}', 'WorkerController@deleteWorker');

    Route::get('/edit/{id}', 'WorkerController@getEditPage');

    Route::post('/edit/{id}', 'WorkerController@editWorker');
});

//Admin page
Route::prefix('admin')->group(function () {

});
