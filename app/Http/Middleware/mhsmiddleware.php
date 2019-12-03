<?php

namespace App\Http\Middleware;

use Closure;

class mhsmiddleware
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

        if($request->session()->get('id_mahasiswa') == null){
            return redirect('login-mahasiswa');
        }
        elseif($request->session()->get('id_mahasiswa') != null){
            return redirect('mahasiswa');
        }
      
        return $next($request);

    }
}
