<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$type)
    {
        if(!Auth::check()){
            return redirect(route('login'));
        }
       //$user = Auth::user();
        $user = $request->user();
       /*if($user->type != $type){
            abort(403,'You are not Admin !!');// غير مسموح الدخول
            // abort(404) Not found
        }*/
        if(!in_array($user->type, $type)){
            return redirect()->route('index')->with('ُErorrMessage','You not allowed to enter here !!');// غير مسموح الدخول
            // abort(404) Not found
            // implode("",$type) لتحويل من array الى String
        }

        return $next($request);
    }
}
