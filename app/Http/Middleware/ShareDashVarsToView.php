<?php

namespace App\Http\Middleware;

use App\Entities\Notification;
use Closure;

class ShareDashVarsToView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check()){
            view()->share('user', auth()->user()->name);
            view()->share('notifications',Notification::all());
        }

        return $next($request);
    }
}
