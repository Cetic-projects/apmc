<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
=======
use App\Http\Resources\ProfilResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;
>>>>>>> a28bd6d16c81853d71a1f9e96364d30d429aece4
use Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
<<<<<<< HEAD
=======

>>>>>>> a28bd6d16c81853d71a1f9e96364d30d429aece4
        $validator = Validator::make($request->all(),[
                        'name' => 'required|string|max:255',
                        'email' => 'required|string|email|max:255|unique:users',
<<<<<<< HEAD
                        'password' => 'required|string|min:8',
=======
                        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
                        'password' => 'required|string|min:6',
>>>>>>> a28bd6d16c81853d71a1f9e96364d30d429aece4
        ]);
        if($validator->fails()){
            return response(['message'=>"The giving data was invalid.",'errors'=>$validator->errors()->all()], 422);
        }
        $data=$request->all();

            $user = User::create([
<<<<<<< HEAD
                        'first_name' => $data['first_name'],
                        'last_name' => $data['last_name'],
                        'email' => $data['email'],
=======
                        'email' => $data['email'],
                        'name' => $data['name'],
                        'phone'=>$data['phone'],
>>>>>>> a28bd6d16c81853d71a1f9e96364d30d429aece4
                        'password' => Hash::make($data['password']),
            ]);

        $token = $user->createToken('auth_token')->plainTextToken;
<<<<<<< HEAD
        return response()->json([
=======
        //$user->sendEmailVerificationNotification();
        return response()->json([
                    'data'=>new UserResource($user),
>>>>>>> a28bd6d16c81853d71a1f9e96364d30d429aece4
                    'message' => 'User has been created',
                    'access_token' => $token,
                    'token_type' => 'Bearer',
        ],201);
    }

}
