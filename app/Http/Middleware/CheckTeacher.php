<?php

namespace App\Http\Middleware;

use Closure;

class CheckTeacher
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->get('teacher_id')) {
            return $next($request);
        }
        return redirect('/login')->with('successMsg', 'Teacher. You have to Login !');
    }
}
