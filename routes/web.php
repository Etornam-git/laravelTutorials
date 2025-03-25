<?php

use Illuminate\Support\Facades\Route;

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

// index
Route::get('/jobs', function (){
    $jobs = job::with('employer')->latest()->paginate(5);
    return view('jobs.index',['jobs' => $jobs]);
});


// create
Route::get('/jobs/create', function (){
    $jobs = job::with('employer')->paginate(5);
    return view('jobs.create',['jobs' => $jobs]);
});

// show
Route::get('/jobs/{id}/', function ($id){ 
    $job = job::find($id);
    return view('jobs.show',['job' => $job]); 
});

// store
Route::post('/jobs', function (){
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 53,
    ]);
   return redirect('/jobs');
});

// edit
Route::get('/jobs/{id}/edit', function ($id){ 
    $job = job::find($id);
    return view('jobs.edit',['job' => $job]); 
});


// update
Route::patch('/jobs/{id}', function ($id){ 
    request()->validate([
        'title' => ['required'],
        'Salary' => ['required'],
    ]);

    $job = job::findOrFail($id);

    $job->title = request('title');
    $job->Salary = request('Salary');
    $job->save();

    return redirect('/jobs/'.$job->id); 
});

// delete
Route::delete('/jobs/{id}', function ($id){ 

    job::findOrFail($id)->delete();
    
   return redirect('/jobs');
});



Route::get('/posts', function () {
    $posts = Post::with('comments', 'tags')->cursorPaginate(5);
    return view('posts', ['posts' => $posts]);
});






// Another method of redefining the $id variable.
//  $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $jobs['id'] == ($id) {
//     return $job['id'] == $id;
//  });


    