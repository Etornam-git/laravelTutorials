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

Route::get('/jobs', function (){
    // disabled lazy loading..Using eager loading to fetch all records...Pagination to solve eager loading problem of fetching all records
    $jobs = job::with('employer')->paginate(5);
    return view('jobs.index',['jobs' => $jobs]);
   
});

    // disabled lazy loading..Using eager loading to fetch all records...Pagination to solve eager loading problem of fetching all records

Route::get('/jobs/create', function (){
    $jobs = job::with('employer')->latest()->paginate(5);
    return view('jobs.create',['jobs' => $jobs]);
   
});
Route::post('/jobs', function (){
    
    // validate the form
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

// the job page route. When a line (also a link to a job) is clicked, 
// it takes you to the job page, by the id of the job array
Route::get('/job/{id}/', function ($id){ 
    // dd($id);
         $job = job::find($id);
        // $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);
        // dd($job);
        return view('jobs.show',['job' => $job]); 

});
    

Route::get('/posts', function () {
    $posts = Post::with('comments', 'tags')->cursorPaginate(5);
   
    return view('posts', ['posts' => $posts]);
});
// Another method of redefining the $id variable.
//  $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $jobs['id'] == ($id) {
//     return $job['id'] == $id;
//  });


    