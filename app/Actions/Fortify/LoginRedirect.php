<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Http\Request;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user();

        // ADMIN / SUPER ADMIN
        if ($user->hasRole(['Admin', 'Super Admin'])) {
            return redirect('/dashboard');
        }

        // USER
        return redirect('/');
    }
}
