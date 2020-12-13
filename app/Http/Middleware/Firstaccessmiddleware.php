<?php

namespace App\Http\Middleware;

use App\Models\Login_model;
use App\Models\User_model;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Firstaccessmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::get("user"))
        {

            $data=[
                "username"=>Session::get("user")->user[0]->username,

            ];

            $getuser=new User_model();
            $user=$getuser->get_user($data);

            if(count($user)!=1)
            {
                return redirect("/login");
            }
        }else{
            return redirect("/login");
        }

        return $next($request);
    }
}
