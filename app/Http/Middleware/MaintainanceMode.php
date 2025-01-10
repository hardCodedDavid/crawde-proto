<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MaintainanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $settings = Setting::all()->first();

        if ($settings->maintainance == 'enabled'){
            // Auth::guard()->logout();
            return redirect('/maintainance/active')->with('error', 'Your account has been deactivated, contact admin on '.env('SUPPORT_EMAIL'));
        }

        return $next($request);
    }
}
