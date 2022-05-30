<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            "rating"=>$this->rating,
            "comment"=>$this->comment,
            "updated_at"=>$this->updated_at,
            "user"=>UserResource::make($this->whenLoaded("user")),
        ];
    }
}
