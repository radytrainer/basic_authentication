<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        $token = $user->createToken('token-'.$request->role)->plainTextToken;

        return response()->json(array([
            'token' => $token,
            'user' => $user,
            'message' => 'Created',
            'status_code' => 201
        ], 201));
    }

    public function signin(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Bad request',
                'status_code' => 401
            ], 401);
        }

        $token = $user->createToken('token-'.$user->role)->plainTextToken;

        return response()->json(array([
            'token' => $token,
            'user' => $user,
            'message' => 'Created',
            'status_code' => 201
        ], 201));
    }

    public function signOut(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'message' => 'Sign out',
            'status_code' => 200
        ], 200);
    }
}
