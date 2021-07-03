<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $request->validate([
           'name' => 'required|min:3',
           'email' => 'required|email|min:3|unique:users',
            'password' => 'required|min:3|confirmed'
        ]);

        User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password)
        ]);

    }
}
