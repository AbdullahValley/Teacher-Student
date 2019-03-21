<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoutine
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->get('student_id') || $request->session()->get('teacher_id')) {
            return $next($request);
        }
        return redirect('/login')->with('successMsg', 'To View Routine. You have to Login !');
    }
}
