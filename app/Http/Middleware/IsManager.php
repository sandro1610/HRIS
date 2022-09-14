<?php
namespace App\Http\Middleware;
use Closure;


class isManager
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
        if(auth()->user()->level == 3){
            return $next($request);
        }

        return redirect('home')->with('error',"Only admin can access!");
    }
}