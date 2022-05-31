<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\Post;
use App\Models\User;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    use ResponseApi;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Auth::user()->orders()->where(function($query){
            $query->where('status','!=','Failed')
            ->where('status','!=','Delivered');
        })->get();
        return $this->ApiJsonResponse("Orders have been fetched",OrderResource::collection($orders),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            "post_id"=>"required|exists:posts,id"
        ]);
        if($validator->fails()){
            return response(['message'=>"The requested product is not available.",'errors'=>$validator->errors()->all()], 422);
        }
        $post=Post::findOrFail($request->post_id);
        $validator=Validator::make($request->all(),[
            "amount"=>"required|integer|gt:0|lte:".$post->amount,
        ]);

        if($validator->fails()){
            return response(['message'=>"The requested amount is not available.",'errors'=>$validator->errors()->all()], 422);
        }
        $post->decrement('amount',$request->amount);
        $data=$request->all();
        $data['user_id']=$request->user()->id;
        $data['receipt']=0;
        $order=Order::create($data);
       return $this->ApiJsonResponse("Order has been created",new OrderResource($order),200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $order=$request->user()->orders()->whereId($id)->first();
        if(is_null($order)){
            return $this->ApiJsonResponseError("The requested order is not available.",404);
        }

        $post=Post::find($order->post_id);
        $data=$request->all();
        $data['post_id']=$post->id;
        $validator=Validator::make($data,[
            "amount"=>"required|integer|gt:0|lte:".$post->amount+$order->amount,
            "post_id"=>"required|exists:posts,id"
        ]);

        if($validator->fails()){
            return response(['message'=>"The requested amount is not available.",'errors'=>$validator->errors()->all()], 422);
        }
        if($order->amount<$request->amount){
            $amount=$request->amount-$order->amount;
            $post->decrement('amount',$amount);
        }else{
            $amount=$order->amount-$request->amount;
            $post->increment('amount',$amount);
        }


        $data['user_id']=$request->user()->id;
        $data['receipt']=0;
        $order->update($data);
       return $this->ApiJsonResponse("Order has been created",new OrderResource($order),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(!Auth::user()->orders()->exists() ||is_null($order=Auth::user()->orders()->where('id',$id)->first())){
            return $this->ApiJsonResponseError("The requested order is not available.",404);
        }
        $post=Post::find($order->post_id);
        $data['post_id']=$post->id;
        $validator=Validator::make($data,[
            "post_id"=>"required|exists:posts,id"
        ]);
        if($validator->fails()){
            return response(['message'=>"The requested post is not available.",'errors'=>$validator->errors()->all()], 422);
        }
        $data['status']="Failed";
        $post->increment('amount',$order->amount);
        $order->update($data);
        return $this->ApiJsonResponse("Order has been failed",new OrderResource($order),200);


    }
}
