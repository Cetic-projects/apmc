<?php

namespace App\Http\Middleware;

use App\Traits\ResponseApi;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IfEmailVerified
{
    use ResponseApi;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::user()->created_at->diffInDays(now())>30 && is_null(Auth::user()->email_verified_at)){
            return $this->ApiJsonResponseError("Your email is not verifed. please resend email verification",401);
        }
        return $next($request);
    }
}
