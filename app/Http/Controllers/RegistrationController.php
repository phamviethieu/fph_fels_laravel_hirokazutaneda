<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
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

        $user = new User;
        $user->store(request());

    //Sign them in
        auth()->login($user);

    //Redirect to the home page

        return redirect()->home();
    }
}