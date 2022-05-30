<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

use App\Models\User;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;

use Response;


class ClientController extends Controller
{
use ResponseApi;

        public function index(Request $request)
        {
            return $this->ApiJsonResponse('Users have been fetched',UserResource::collection(User::latest('updated_at')->get()),200);
           /* return response()->json([
                'message'=>'Users have been fetched',
                'data'=>UserResource::collection(User::latest('updated_at')->get())],200);*/
        }

        public function edit($id) {
            $user=User::find($id);
            if($user==null) {
                return $this->ApiJsonResponse('User has not been fetched',null,404);
               /* return response()->json([
                    'message'=>'User has not been fetched'],404);*/
            }
            return $this->ApiJsonResponse('User has been fetched',new UserResource($user),200);
           /* return response()->json([
                'message'=>'User has been fetched',
                'data'=>new UserResource($user)],200);*/
        }







}
