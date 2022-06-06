<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ResetPasswordController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\API\VerificationEmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => "v1"], function () {
<<<<<<< HEAD

    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('/login', [LoginController::class, 'login']);
=======
    //user
    Route::get('/users/{id}/user', [ClientController::class, 'edit']);
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('send-reset-link-response',[ResetPasswordController::class,'sendResetLinkResponse']);
    Route::post('send-reset-response',[ResetPasswordController::class,'sendResetResponse']);
    Route::get('email/verify/{id}', [VerificationEmailController::class,'verify'])->name('verification.verify');
    Route::group(['prefix' =>"auth",'middleware' => ['auth:sanctum','if_email_verified']], function () {
        //user
        Route::get('email/resend', [VerificationEmailController::class,'resend'])->name('verification.resend');
        Route::get('/myprofile',[AuthController::class, 'myprofile'] );
        Route::put('/user/update',[AuthController::class, 'update'] );
        Route::delete('/user/delete',[AuthController::class, 'delete'] );
        Route::get('/logout',[LoginController::class, 'logout'] );
        //reviews
         Route::post('review/create-or-update',[ReviewController::class,'store']);
         Route::delete('review/{id}/delete',[ReviewController::class,'destroy']);
        //orders
        Route::get('orders',[OrderController::class,'index']);
        Route::post('order/create',[OrderController::class,'store']);
        Route::put('order/{id}/update',[OrderController::class,'update']);
        Route::put('order/{id}/cancel',[OrderController::class,'destroy']);
    });
    //posts
    Route::get("posts",[PostController::class,'index']);
    Route::get("top-10-posts",[PostController::class,'topTen']);
    Route::get("category/{id}/posts",[PostController::class,'byCategory']);
    Route::get("promotinal-posts",[PostController::class,'promotinal']);
    Route::get("10-newest-posts",[PostController::class,'TenNewestPosts']);
    Route::get("best-selling-posts",[PostController::class,'bestSellingPosts']);
    Route::get("posts-by-price-min={min}&max={max}",[PostController::class,'filterByPrice']);
    Route::get("sort-posts-by-desc",[PostController::class,'sortPostsByDesc']);
    Route::get("sort_posts_by_asc",[PostController::class,'sortPostsByAsc']);
    //reviews
    Route::get("post/{id}/reviews",[ReviewController::class,'show']);
    Route::delete('review/{id}/delete',[ReviewController::class,'destroy']);
    //categories
    Route::get('tree-categories',[CategoryController::class,'index']);
    Route::get('categories',[CategoryController::class,'allCategories']);
    //position/1/banner
    Route::get('position/{id}/banner',[BannerController::class,'show']);
>>>>>>> a28bd6d16c81853d71a1f9e96364d30d429aece4

});
