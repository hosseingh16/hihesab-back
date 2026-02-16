<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $req)
    {        
       
        $fields = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        

       

        $user = User::create($fields);
    }

    public function login(Request $req)
    {
        $fields = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (!Auth::attempt($fields)) {
            return response()->json(['message' => 'Invalid Credentials']);
        }

        $req->session()->regenerate();
        return response()->json(['message' => 'Logged in successfully']);
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return response()->json(['message' => 'Logged out']);   
    }
}
