<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $formFields = request()->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:4',  Rule::unique('users', 'username')],
            'email' => ['required', 'email',  Rule::unique('users', 'email')],
            'password' => 'required|min:7'
        ]);
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);


        return redirect('/')->with('success', 'Your account has been created');
    }
}
