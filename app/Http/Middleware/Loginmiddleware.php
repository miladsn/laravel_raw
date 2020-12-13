<?php

namespace App\Http\Middleware;

use App\Models\Login_model;
use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Loginmiddleware
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

        $data=[
            "username"=>$request->post('username'),
            "password"=>$request->post('password'),
        ];
        $loginmodel=new Login_model();
        $result_login=$loginmodel->getdata($data);

        if(!$result_login)
    {

            $alert=[
                "state"=>"2",
                "data"=>"نام کاربری یا رمز عبور اشتباه است"
            ];
            Session::put('login', $alert);
            return redirect('/login');

        }
        return $next($request);
    }
}
