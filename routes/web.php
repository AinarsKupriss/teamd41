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


//User
Route::get('/profile', 'UserController@getUserHome');

Route::get('/editprofile', 'UserController@getEditPage');
Route::put('/editprofile', 'UserController@editUser');

Route::get('/newcustomproject', 'UserController@getCustomProjectPage');
Route::post('/addcustomproject', 'UserController@addCustomProject');

Route::get('/allprojects', 'UserController@getProjectPage');
Route::post('/addprojecttoorder/{projectID}', 'UserController@addProjectToOrder');


//Worker page
Route::prefix('worker')->group(function () {
    Route::get('/', 'WorkerController@getWorkerHome');

    Route::post('/register', 'WorkerController@createWorker');

    Route::get('/delete/{id}', 'WorkerController@deleteWorker');

    Route::get('/edit/{id}', 'WorkerController@getEditPage');

    Route::post('/edit/{id}', 'WorkerController@editWorker');

    Route::post('/addProject', 'WorkerController@addProject');
});


//Admin page
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@getAdminHome');

    Route::put('/update/{id}', 'AdminController@updateUser');

});

