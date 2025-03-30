<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // attempt to authenticate the user with the given credentials
        if(! Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'invalid email.',
                'password'=> 'invalid password '
            ]);
        };

        // regenerate session token
        request()->session()->regenerate();

        Auth::login(Auth::user());

        return redirect('/jobs');

    }

    public function destroy()
    {
       Auth::logout();
        return redirect('/');
    }
}
