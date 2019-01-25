<?php
/**
 * Created by PhpStorm.
 * User: julio
 * Date: 25-01-19
 * Time: 19:34
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Member
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
        if(Auth::guard('members')->check()){
            return $next($request);
        }

        return redirect('/miembros/ingresar')->with('error','Debe estar autenticados');
    }
}