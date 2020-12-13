<?php

namespace App\Http\Controllers;
use App\Models\Login;


use App\Models\Login_model;
use App\Models\Menu_model;
use App\Models\User_model;
use App\Models\Usermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Logincontroller extends Controller
{
     public function check_login (Request $request)
     {


         $data=[
                  "username"=>$request->post('username'),
                  "password"=>$request->post('password'),
         ];
         $loginmodel=new Login_model();
         $result_login=$loginmodel->getdata($data);

if($result_login)
{
    $data=[
        "username"=>$request->post('username'),

    ];
   $usermodel= new User_model();
   $userdata= $usermodel->get_user($data);
    $menu=new Menu_model();
    $getmenu=$menu->get_menudata();

    $data_session= new \stdClass();
    $data_session->menu=$getmenu;
    $data_session->user=$userdata;

    Session::put('user', $data_session);


    return redirect('/dashboard');
}


     }

    public function index(){

        $alert=[
            "state"=>"0",
            "data"=>""
        ];
        return view("login",compact("alert"));
    }

    public function logout()
    {
        Session::forget("user");

        return redirect("/login");
    }







}
