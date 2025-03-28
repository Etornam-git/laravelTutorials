<?php

namespace App\Http\Controllers;
use App\Models\job;
use App\Models\Employer;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = job::with('employer')->latest()->paginate(5);
        return view('jobs.index',['jobs' => $jobs]);
    }

    public function create()
    {
        $jobs = job::with('employer')->paginate(5);
        return view('jobs.create',['jobs' => $jobs]);
    }

    public function show(job $job)
    {
        return view('jobs.show',['job' => $job]);
    }

    public function store(job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
   
        $employerID = Employer::inRandomOrder()->first()->id;
        
        job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => $employerID,
        ]);
       return redirect('/jobs');
    }

    public function edit(job $job)
    {
        return view('jobs.edit',['job' => $job]); 
    }

    public function update(job $job)
    {
        request()->validate([
            'title' => ['required'],
            'Salary' => ['required'],
        ]);
    
        // $job = job::findOrFail($job);
    
        $job->title = request('title');
        $job->Salary = request('Salary');
        $job->employer_id = request('employer_id');
        $job->save();
    
        return redirect('/jobs/'.$job->id); 
    }

    public function destroy(job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }

    
}
