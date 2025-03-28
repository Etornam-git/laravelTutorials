<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Models\job;




Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Lawrence',
    ]);
});

Route::view('/contact', 'contact');

Route::get('/about', function () {
    return view('about');
});

Route::resource('jobs', JobController::class);

Route::resource('posts', PostController::class);



    