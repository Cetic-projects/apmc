<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use App\Traits\ResponseApi;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\Rule as ValidationRule;
use Validator;

class ReviewController extends Controller
{
    use ResponseApi;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'comment' => 'required_without:rating|string|max:255',
            'rating' => 'required_without:comment|numeric|gt:0|lte:5',
            'post_id'=>'required|exists:posts,id'
           ]);
        if($validator->fails()){
            return response(['message'=>"The giving data was invalid.",'errors'=>$validator->errors()->all()], 422);
        }
        $data=$request->all();
        $data['user_id']=$request->user()->id;
        $review=Review::updateOrCreate($data);
        return $this->ApiJsonResponse("Review has been updated",ReviewResource::make($review),201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reviews=Cache::remember('reviews-of-post'.$id,6,function(){
            return Review::with('user')->get();
        });

        return $this->ApiJsonResponse("Reviews have been fetched",ReviewResource::collection($reviews),200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {

        //$review=Review::where('id',$id)->first();
        $review=Auth::user()->reviews()->where('id',$id)->first();

        if(is_null($review)){
            return $this->ApiJsonResponseError("Review doesn't exist",401);
        }
        $review->delete();
        return $this->ApiJsonResponse("Review has been deleted",null,200);

    }
}
