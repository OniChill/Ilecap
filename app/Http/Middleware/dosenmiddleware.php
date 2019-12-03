<?php

namespace App\Http\Middleware;

use Closure;

class dosenmiddleware
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
        
        if($request->session()->get('id_dosen') == null){
            return redirect('login-dosen');
        }
        elseif($request->session()->get('id_dosen') != null){
            return redirect('dosen');
        }
        return $next($request);
    }
}
