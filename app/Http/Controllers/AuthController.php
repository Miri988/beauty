<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserSignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signUp (UserSignupRequest $request)
    {
        $user = User::create([
            'first_name' => $request -> post ('first_name'),
            'last_name' => $request -> post ('last_name'),
            'email' => $request -> post ('email'),
            'password' => Hash::make($request -> post('password')), 
            'role_id' => 3,
        ]);

        $token = $user -> createToken('auth_token') -> plainTextToken;

        return response() -> json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logIn (UserLoginRequest $request)
        {
            if (!Auth::attempt($request -> only('email', 'password'))) 
            {
                return response() -> json (
                    [
                        'message' => 'Email или password заданы неверно',
                    ], 
                    401
                );
            }

            $user = User::where('email', $request -> post('email'));

            $token = $user -> createToken('auth_token') -> plainTextToken;

            return response() -> json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }

    public function me(Request $request)
    {
        return $request -> user();
    }

    public function logOut(Request $request)
    {
        $request -> user() -> currentAccessToken() -> delete();
        return response() -> noContent();
    }

    public function logOutAll (Request $request)
    {
        $request -> user() -> tokens() -> delete();
        return response() -> noContent();

    }
}
