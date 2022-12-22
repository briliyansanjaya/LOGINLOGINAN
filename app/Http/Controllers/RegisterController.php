<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function register(){
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $validatedData['password'] = hash::make($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('success', 'Registration Successfull! Please Login!');

        return redirect('/login');
    }
}
