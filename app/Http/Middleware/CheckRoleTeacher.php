<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleTeacher
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = auth()->user()->role;
        //var_dump($role);

        if ($role != "teacher"){
            //var_dump("Teacher");
            //TODO do studentovej hlavnej stranky
            return redirect()->route("studentfiles");
        }

        echo "ide next request";
        return $next($request);
    }



}
