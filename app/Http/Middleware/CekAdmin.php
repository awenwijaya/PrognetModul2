<?php

namespace App\Http\Middleware;

use Closure;

class CekAdmin
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
        $admin = \App\Admin::where('username',$request->username)->first();
        if ($admin->status == '1'){
            return redirect('/admin/home');
        }else if($admin->status == '0'){
            return redirect('loginPage');
        }
        return $next($request);
    }
}
