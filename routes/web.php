<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

use App\Models\job; 
use App\Models\Post;



Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Lawrence',
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}/', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
Route::patch('/jobs/{id}', [JobController::class, 'update']);
Route::delete('/jobs/{id}', [JobController::class, 'delete']);



Route::get('/posts', function () {
    $posts = Post::with('comments', 'tags')->cursorPaginate(5);
    return view('posts', ['posts' => $posts]);
});






// Another method of redefining the $id variable.
//  $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $jobs['id'] == ($id) {
//     return $job['id'] == $id;
//  });


    