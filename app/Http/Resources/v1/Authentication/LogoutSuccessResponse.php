<?php

namespace App\Http\Resources\V1\Authentication;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cookie;

class LogoutSuccessResponse implements Responsable
{
    public function toResponse($request)
    {
        // delete cookies related to user
        Cookie::queue(Cookie::forget('access_token'));
        Cookie::queue(Cookie::forget('timezone'));

        return new JsonResponse('', 204);
    }
}
