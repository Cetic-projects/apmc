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
            return Post::with(['reviews','media','category','orders'])->where(function($query){
                $query
                ->where('begin_promotional_date','<',now())
                ->where('end_promotional_date','>',now())
                ->where('promotional_price','!=',null);
            })->get();
        });
        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($posts),200);

    }

    public function TenNewestPosts(){
        $posts=Cache::remember('ten_newest_posts',60*60*24,function(){
            return Post::with(['reviews','media','category','orders'])->OrderByDesc('created_at')->take(10)->get();
        });
        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($posts),200);
    }

    public function bestSellingPosts(){
        $posts=Cache::remember('best-selling-posts',60*60*24,function(){
            return Post::with(['reviews','media','category','orders'])->get()->sortByDesc("number_of_sales")->take(10);
        });
        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($posts),200);

    }
    public function filterByPrice($min,$max){

        $posts=Post::with(['media','category','orders'])->where(function($query)use($min,$max){
            $query->where('price','>',$min)->where('price','<',$max);
        })->get();

        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($posts),200);
    }
    public function sortPostsByDesc(){
        $posts=Cache::remember('sort_posts_by_desc',60*60*24,function(){
            return Post::with(['reviews','media','category','orders'])->OrderByDesc('price')->get();
        });
        return $this->ApiJsonResponse("Posts have been fetched",PostResource::collection($posts),200);
    }
    public function sortPostsByAsc(){
        $posts=Cache::remember('sort_posts_by_asc',60*60*24,function(){
            return Post::with(['reviews','media','category','orders'])->orderBy('price','asc')->get();
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
