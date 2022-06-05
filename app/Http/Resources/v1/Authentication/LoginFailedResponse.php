<?php

namespace App\Http\Resources\v1\Authentication;

use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Validation\ValidationException;

class LoginFailedResponse implements Responsable
{


    public function __construct()
    {

    }

    /**
     * @throws ValidationException
     */
    public function toResponse($request)
    {
        throw ValidationException::withMessages(['email' => [trans('auth.failed')]]);
    }
}
