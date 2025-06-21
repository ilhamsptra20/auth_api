<?php

namespace App\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        // Jika request tidak expectsJson, kita paksa return 401 daripada redirect
        if (! $request->expectsJson()) {
            abort(response()->json(['message' => 'Unauthorized'], 401));
        }

        return null;
    }
}
