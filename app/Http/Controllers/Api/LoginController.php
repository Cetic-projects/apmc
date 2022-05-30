<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Authentication\LoginFailedResponse;
use App\Http\Resources\V1\Authentication\LoginSuccessResponse;
use App\Http\Resources\V1\Authentication\LogoutSuccessResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if($validator->fails()){

            return response(['message'=>"The giving data was invalid.",'errors'=>$validator->errors()->all()], 422);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['errors' => ['Invalid login details']], 401);
            return new LoginFailedResponse();
        }

        $user = User::where('email', $request['email'])->with(['media','roles','city'])->firstOrFail();



        return new LoginSuccessResponse($user);

        }

        public function logout(Request $request){
            $request->user()->currentAccessToken()->delete();
           // return new LogoutSuccessResponse();
            return response()->json(["message"=>"User has been Logged out"],200);
        }
}
