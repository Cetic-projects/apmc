<?php

namespace App\Http\Resources\V1\Authentication;


use App\Enums\TokenPurpose;
use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use App\Http\Resources\ProfilResource;
use App\Http\Resources\UserResource;

class LoginSuccessResponse implements Responsable
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function toResponse($request)
    {
        // Revoke all previous tokens...
        $this->user->tokens()->where('name',"auth_token")->delete();

        // Create new token
        $token = $this->user->createToken("auth_token");

        // Get user timezone, fallback to app timezone
        $timezone = config('app.timezone');
        $expiresIn = (int) config('sanctum.expiration'); // sanctum expiration is in minutes

        // Return response & attach cookies
        return response([
            'token_type' => 'Bearer',
            'access_token' => $token->plainTextToken,
            'expires_in' => $expiresIn * 60,
            'data'=>new UserResource($this->user) // converts to seconds
        ],200)->cookie(
            'access_token',
            $token->plainTextToken,
            $expiresIn
        )->cookie(
            'timezone',
            $timezone,
            $expiresIn
        );
    }
}
