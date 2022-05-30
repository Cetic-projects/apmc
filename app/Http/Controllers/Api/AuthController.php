<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfilResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\v1\Authentication\LoginWithTokenFailedResponse;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Validator;

class AuthController extends Controller
{

    public function myprofile(Request $request)
    {

        return response()->json([
            'data'=>new UserResource($request->user())],200);
    }

    public function update(Request $request){
        $user=$request->user();

        $validator = Validator::make($request->all(),[
            'last_name'     =>  "string|min:4",
            'first_name'     =>  "string|min:4",
            'email' => "email|unique:users,email,$user->id",
            'password' => 'nullable|min:6',
            'avatar' => 'image',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'nullable|string',
            'website' => 'nullable|string',
            'about' => 'nullable|string',
            'company_name' => 'nullable|string',
            'ref_code' => 'nullable|string',
            'Latitude' => "regex:/^[0-9]+(\.[0-9][0-9]?)?$/",
            'Longitude' => 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/'
            ]);
            if($validator->fails()){
                return response(['message'=>"The giving data was invalid.",
                'errors'=>$validator->errors()->all()], 422);
            }

            $data=$request->all();
            if($request->password!=null){
                $data['password'] =Hash::make($data['password']);
            }

             $user->update($data);
            return response()->json([
                'message' => 'User has been updated',
               'data'=>new UserResource($user),
            ],200);

    }

    public function uploadImage(Request $request){

        $image = $request->img64;
        $imageName = Str::random(10) . '.png';
        $user=$request->user();
        if($user->getFirstMediaUrl('users', 'thumb')!=null){
            $user->clearMediaCollection('users');
        }


        $user->addMediaFromBase64($image)->usingFileName($imageName)->toMediaCollection('users');
        return Response()->json([
            'message' => 'Image uploaded successfully',
            "data"=>new ProfilResource($user)
        ],200);
    }
    public function delete(Request $request){
        $user=$request->user();

        User::destroy($user->id);

        $user->currentAccessToken()->delete();
        return response()->json([
            'message' => 'User has been deleted',

        ],200);

    }

    public function inscription(Request $request){
        $user=$request->user();

        $validator = Validator::make($request->all(),[
            'phone' => "required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10|unique:users,phone,$user->id",
            'company_name' => 'nullable|string',
            ]);
            if($validator->fails()){
                return response(['message'=>"The giving data was invalid.",
                'errors'=>$validator->errors()->all()], 422);
            }
             $user->update($request->all());
            return response()->json([
                'message' => 'User has been updated',
               'data'=>new UserResource($user),
            ],200);

    }

}
