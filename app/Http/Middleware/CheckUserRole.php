<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Get the authenticated user
        $user = $request->user();

        // Check if the user has the required role
        if ($user && $user->role === $role) {
            return $next($request);
        }

        // Redirect or respond with an error if the user doesn't have the required role
        return response()->json(['error' => 'Unauthorized'], 403);
    }
}
