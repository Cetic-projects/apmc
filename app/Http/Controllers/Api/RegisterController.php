<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfilResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(),[
                        'first_name' => 'required|string|max:255',
                        'last_name' => 'required|string|max:255',
                        'email' => 'required|string|email|max:255|unique:users',
                        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
                        'password' => 'required|string|min:6',
        ]);
        if($validator->fails()){
            return response(['message'=>"The giving data was invalid.",'errors'=>$validator->errors()->all()], 422);
        }
        $data=$request->all();

            $user = User::create([
                        'email' => $data['email'],
                        'first_name' => $data['first_name'],
                        'last_name' => $data['last_name'],
                        'phone'=>$data['phone'],
                        'password' => Hash::make($data['password']),
            ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        //$user->sendEmailVerificationNotification();
        return response()->json([
                    'data'=>new UserResource($user),
                    'message' => 'User has been created',
                    'access_token' => $token,
                    'token_type' => 'Bearer',
        ],201);
    }

}
