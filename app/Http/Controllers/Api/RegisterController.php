<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
                        'first_name' => 'required|string|max:255',
                        'last_name' => 'required|string|max:255',
                        'email' => 'required|string|email|max:255|unique:users',
                        'password' => 'required|string|min:8',
        ]);
        if($validator->fails()){
            return response(['message'=>"The giving data was invalid.",'errors'=>$validator->errors()->all()], 422);
        }
        $data=$request->all();

            $user = User::create([
                        'first_name' => $data['first_name'],
                        'last_name' => $data['last_name'],
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
            ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
                    'message' => 'User has been created',
                    'access_token' => $token,
                    'token_type' => 'Bearer',
        ],201);
    }

}
