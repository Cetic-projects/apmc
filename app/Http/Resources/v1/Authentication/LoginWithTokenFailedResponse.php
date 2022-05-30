<?php

namespace App\Http\Resources\v1\Authentication;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class LoginWithTokenFailedResponse implements Responsable
{
    /**
     * @throws ValidationException
     */
    public function toResponse($request): Response
    {
        throw ValidationException::withMessages(['access_token' => ['Invalid access token']]);
    }
}
