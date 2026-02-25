<?php

use Illuminate\Support\Facades\Route;
/*
	Route::get('/', function () {
	    return view('home',[
	        'title' => 'Home'
	    ]);
	});
	*/

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);

use App\Http\Controllers\ProjectController;

Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/create', [ProjectController::class, 'create']);
Route::post('/project', [ProjectController::class, 'store']);


use App\Http\Controllers\Project2Controller;
Route::resource('/project2', Project2Controller::class);
