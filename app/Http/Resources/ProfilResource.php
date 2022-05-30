<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfilResource extends JsonResource
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
       // $roles=$this->roles;
        return  [

            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'avatar'=>$image==null ? env('APP_URL')."/images/user-avatar.jpg" : $image,
            //'branch'=>$this->branch== null ? null :$this->branch->name,
            'address'=>$this->address,
            'website'=>$this->website,
            'status'=>$this->status,
            //"password"=>$this->password,
            'about'=>$this->about,
            'is_phone_hidden'=>$this->is_phone_hidden,
            'is_email_hidden'=>$this->is_email_hidden,
            'company_name'=>$this->company_name,
            //'nb_stars'=>$this->nb_stars,
            'phone'=>$this->phone,
            'city'=>$this->city,
            //'invited_by'=>$this->invited_by,
            //'role'=>$roles->first()==null ?"Client":$roles->first()->name,
            // 'last_seen'=>$this->last_seen,
            // 'latitude'=>$this->latitude,
            // 'longitude'=>$this->longitude,
            // 'created_at'=>$this->created_at,
            // 'updated_at'=>$this->updated_at,
            //'remember_token'=>$this->remember_token,
            //'commands'=>$this->commands==null ? null :CommandResource::collection($this->commands),
        ];
    }
}
