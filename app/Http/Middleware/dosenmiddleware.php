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
        
        if($request->session()->get('id_dosen')){
            return $next($request);
        }elseif ($request->session()->get('id_mahasiswa')) {
            return $next($request);
        }
            return redirect('login1');
    }
}
