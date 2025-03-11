<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/jobs', function (){
    return view('jobs', [
        'jobs'=>[
            [
                'id'=>'1',
                'title'=>'Developer',
                'Salary'=>'5000'
            ],
            [
                'id'=>'2',
                'title'=>'Designer',
                'Salary'=>' 2000'
            ],
            [
                'id'=>'3',
                'title'=>'Product Manager',
                'Salary'=>' 3000'
            ]
        ]
            ]);
});

Route::get('/jobs/{id}', function ($id){

    dd($id);
    return view('jobs', [
        'jobs'=>[
            [
                'id'=>'1',
                'title'=>'Developer',
                'Salary'=>'5000'
            ],
            [
                'id'=>'2',
                'title'=>'Designer',
                'Salary'=>' 2000'
            ],
            [
                'id'=>'3',
                'title'=>'Product Manager',
                'Salary'=>' 3000'
            ]
        ]
            ]);
});