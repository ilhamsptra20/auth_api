<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterController extends Controller
{
    /**
        * Handle the incoming request.
        * @OA\Post(
        *     path="/api/register",
        *     summary="Register user baru",
        *     tags={"Auth"},
        *     @OA\RequestBody(
        *         required=true,
        *         @OA\JsonContent(
        *             required={"name","email","password","password_confirmation"},
        *             @OA\Property(property="name", type="string", example="Ahmad Sulaiman"),
        *             @OA\Property(property="email", type="string", format="email", example="ahmad@sulaiman.com"),
        *             @OA\Property(property="password", type="string", format="password", example="12345678"),
        *             @OA\Property(property="password_confirmation", type="string", format="password", example="12345678")
        *         )
        *     ),
        *     @OA\Response(
        *         response=201,
        *         description="User registered successfully"
        *     ),
        *     @OA\Response(
        *         response=422,
        *         description="Validation failed"
        *     )
        * )
    */

    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user', 'token'), 201);
    }
}
