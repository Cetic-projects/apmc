<?php

namespace App\Observers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class PostObserver
{
    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Post $post)
    {
        //
        Cache::forget('promotinal');
        Cache::forget('posts-by-category');
        Cache::forget('top-10-posts');
        Cache::forget('posts');
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Post $post)
    {
        Cache::forget('promotinal');
        Cache::forget('posts-by-category');
        Cache::forget('top-10-posts');
        Cache::forget('posts');
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Post $post)
    {
        Cache::forget('promotinal');
        Cache::forget('posts-by-category');
        Cache::forget('top-10-posts');
        Cache::forget('posts');
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
