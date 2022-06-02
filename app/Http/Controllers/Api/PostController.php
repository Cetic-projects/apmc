<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Traits\ResponseApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    use ResponseApi;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Cache::remember('posts',6,function(){
            return Post::with(['category','media','reviews','orders'])->get();
        });

        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($products),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function topTen()
    {
        $products=Cache::remember('top-10-posts',6,function(){
            return Post::with(['category','media','reviews','orders'])->get()->sortByDesc('rating')->take(10);
        });

        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($products),200);
    }

    public function byCategory($id)
    {
        $products=Cache::remember('posts-by-category',6,function()use($id){
            return Post::where('category_id',$id)->with(['category','media','reviews','orders'])->get()->sortByDesc('rating')->take(10);
        });

        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($products),200);
    }

    public function promotinal(){
        $posts=Cache::remember('promotinal',6,function(){
            return Post::where(function($query){
                $query
                ->where('begin_promotional_date','<',now())
                ->where('end_promotional_date','>',now())
                ->where('promotional_price','!=',null);
            })->get();
        });
        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($posts),200);

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
        //
    }
}
