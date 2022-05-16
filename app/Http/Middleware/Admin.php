<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ( ! Auth::check()){
            return redirect()->guest(route('home.login'));
            //->with('error', trans('app.unauthorized_access'));
        }

        $user = Auth::user();

        if ( ! $user->Admin)
            return redirect(route('home.index'));
            //->with('error', __t('access_restricted'));

        return $next($request);
    }
}
