<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        // return view('posts.index');
        return view('registration.create');
    }

    public function store()
    {
        // Validate the form
            $this->validate(request(),[
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);
        
        // Create and save the user
            $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
            ]);

        //Sign them in
            auth()->login($user);

        //Redirect to the home page

            return redirect()->home();
    }
}