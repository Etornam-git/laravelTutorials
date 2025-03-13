<?php

use Illuminate\Support\Facades\Route;

use App\Models\job; 



Route::get('/', function () {
    // $jobs = job::all();
    // dd($jobs);

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

// normal jobs page route. Where each line is a link to a job
Route::get('/jobs', function (){
    return view('jobs',[
        'jobs' => job::all()]);
    // laravel includes an arr class that can be looped through to get the content
   
});

// the job page route. When a line (also a link to a job) is clicked, 
// it takes you to the job page, by the id of the job array
Route::get('/job/{id}/', function ($id){ 
    // dd($id);
         $job = job::find($id);
        // $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);
        // dd($job);
        return view('job',['job' => $job]); 

});
    
// Another method of redefining the $id variable.
//  $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $jobs['id'] == ($id) {
//     return $job['id'] == $id;
//  });


    