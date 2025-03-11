<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    // the view takes a second argument, an array that can take data to display on the view
    return view('home', [
        // in key-value pairs
        'greeting'=>'Hello',
        'name'=>'Lawrence',
        
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
        'jobs' => [
            ['id'=>1,'title'=>'Developer','Salary'=>'5000'],
            ['id'=>2,'title'=>'Designer','Salary'=>' 2000'],
            ['id'=>3,'title'=>'Product Manager','Salary'=>' 3000']
        ] 
        ]);
    // laravel includes an arr class that can be looped through to get the content
   
});

// the job page route. When a line (also a link to a job) is clicked, 
// it takes you to the job page, by the id of the job array
Route::get('/job/{id}/', function ($id){ 
    // dd($id);
    $jobs = [
        ['id'=>'1','title'=>'Developer','Salary'=>'5000'],
        ['id'=>'2','title'=>'Designer','Salary'=>' 2000'],
        ['id'=>'3','title'=>'Product Manager','Salary'=>' 3000']
        ];

        $job = Arr::first($jobs, function($job) use ($id) {
            return $job['id'] == $id;
        });
        // $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);
        // dd($job);
        return view('job',['job' => $job]); 

});
    
// Another method of redefining the $id variable.
//  $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $jobs['id'] == ($id) {
//     return $job['id'] == $id;
//  });


    