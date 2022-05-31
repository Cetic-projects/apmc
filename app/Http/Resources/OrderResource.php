<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        "id"=>$this->id,
        "amount"=> $this->amount,
        "user"=>UserResource::make($this->whenLoaded('user')),
        "receipt"=>$this->receipt,
        "status"=>$this->status,
        "updated_at"=>$this->updated_at,
        "post"=>PostResource::make($this->whenLoaded('post'))
        ];
    }
}
