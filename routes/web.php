<?php

use BasicLaravel\Notifications\SubscriptionRenewalFailed;
use BasicLaravel\Repositories\ProjectRepository;
use BasicLaravel\User;

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

Route::get('/', function (Request $request, ProjectRepository $project) {

    // $user = User::first();
    // $user->notify(new SubscriptionRenewalFailed);
    // return 'Done';
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Auth::routes();
