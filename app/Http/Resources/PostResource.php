<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            "title"=>$this->title,
            'image'=>$this->image,
            "description"=>$this->description,
            "amount"=>$this->amount,
            "price"=>$this->price,
            "export_price"=>$this->export_price,
            "number_of_sales"=>$this->number_of_sales,
            "rating"=>$this->rating??0,
            "promotional_price"=>$this->when($this->begin_promotional_date<now()&&$this->end_promotional_date>now(),$this->promotional_price),
            "begin_promotional_date"=>$this->when($this->begin_promotional_date!=null,$this->begin_promotional_date),
            "end_promotional_date"=>$this->when($this->end_promotional_date!=null,$this->end_promotional_date),
            "is_negociable"=>$this->is_negociable,
            "reviews"=>ReviewResource::collection($this->whenLoaded("reviews")),
            "category"=>optional($this->whenLoaded("category"))->name,


        ];
    }
}
