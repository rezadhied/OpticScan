<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('alert', 'You need to login first.');
        }

        $user = Auth::user();
        if ($user->role != $role) {
            switch ($role) {
                case 'dokter':
                    return redirect()->route('dashboardDokter')->with('alert', 'You are not authorized to access this page.');
                    break;
                case 'pasien':
                    return redirect()->route('dashboardPasien')->with('alert', 'You are not authorized to access this page.');
                    break;
                case 'admin':
                    return redirect()->route('dashboardDokter')->with('alert', 'You are not authorized to access this page.');
                    break;
                default:
                    return redirect()->route('login')->with('alert', 'You need to login first.');
            }
        }

        return $next($request);
    }
}
