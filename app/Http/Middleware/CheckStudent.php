<?php

namespace App\Http\Middleware;

use Closure;

class CheckStudent
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->get('student_id')) {
            return $next($request);
        }
        return redirect('/login')->with('successMsg', 'Student. You have to Login !');
    }
}
