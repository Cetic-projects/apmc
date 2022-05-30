<?php
namespace App\Traits;
trait ResponseApi{
    public function  ApiJsonResponse($message,$data,$status){
        return response()->json([
            "message"=>$message,
            "data"=>$data,
        ],$status);

    }
    public function  ApiJsonResponseError($message,$status){
        return response()->json([
        "errors"=>$message,
        ],$status);

    }
}
