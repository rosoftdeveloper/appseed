<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = [
            'name' => ( $request->user['name'] ?? 'Demo User'),
            'email' => $request->user['email'],
            'password' => $request->user['password'],
        ];

//        dd($validate);

        $validator = Validator::make($data, [
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 200);
        }

        $user = User::create([
            'name' => ($data['name'] ?? 'Demo User'),
            'email'    => $data['email'],
            'password' => $data['password'],
        ]);

        $token = $token = JWTAuth::fromUser($user);

        return $this->respondWithToken($token);
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->user['email'],
            'password' => $request->user['password'],
        ];

        $validator = Validator::make($credentials, [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 200);
        }

        if (! $token = JWTAuth::attempt($credentials)) {
            return response()->json(['errors' => ['email' => 'User or email doesn\'t exis']], 401);
        }

        $user = auth()->user();

        return response()->json([
            'user' => [
                '_id' => $user->id,
                'email' => $user->email,
                'name' => 'John',
                'surname' => 'Doe',
                'token' => $token,
//                'token_type'   => 'bearer',
//                'expires_in'   => auth('api')->factory()->getTTL() * 60,
            ],
        ]);

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
