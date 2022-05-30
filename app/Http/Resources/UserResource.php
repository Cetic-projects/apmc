<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $image=$this->getFirstMediaUrl('users', 'thumb');
        return [
            'id'=>$this->id,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
           'avatar'=>$image==null ? env('APP_URL')."/images/user-avatar.jpg" : $image,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'city'=>CityResource::make($this->whenLoaded("city")),
            "roles"=>RoleResource::collection($this->whenLoaded("roles")),
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'remember_token'=>$this->remember_token,

        ];
    }
}
