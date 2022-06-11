<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email|string|max:200|unique:users',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->CreateToken('token-auth')->plainTextToken;
        return response()->json([
            'data' => $user,
            'access_tokken' => $token,
            'token_type' => 'Bearer'
        ]);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string|max:200|',
            'password' => 'required|string|min:8'
        ]);
        
        if (!Auth::attempt(
            $request->only('email','password')
        )) {
            return response()->json([
                'message' => 'unathoriezd'
            ], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->CreateToken('token-auth')->plainTextToken;
        return response()->json([
            'data' => $user,
            'access_tokken' => $token,
            'token_type' => 'Bearer'
        ]);
    }
}
