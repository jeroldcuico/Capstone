<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ClientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user()->role === 'client';
        if (auth()->check() && $user) {
            return $next($request);
        }


        $jobId = $request->route('job'); // Assuming the job ID is passed as a route parameter
        $job = Job::findOrFail($jobId);

        dd($jobId);
        
        abort(403, 'Youre not allowed');
    }
}
