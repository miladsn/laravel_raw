<?php

namespace App\Http\Controllers;

use App\Models\Dashboardmodel;
use App\Models\Menu_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Dashboard_Controller extends Controller
{
    public function index ()
    {

        $getdata=new Dashboardmodel();
        $result_users=$getdata->getdata();



      // var_dump(Session::get("menu"));
        return view("dashboardview",compact('result_users'));
    }
    public function inserter(){

 $inserter=new Dashboardmodel();
 $insert=$inserter->inserter();
    }


    public function ajax(Request $request)
    {
        $data2=[
            "name"=>$request->name,
            "lname"=>"davoodi",
            "username"=>"gholi",
            "password"=>md5("123456"),

        ];
        $insert=DB::table("users")->insert($data2);
        $data=[
            "alert"=>"Data is successfully added",
            "name"=>$request->name,
            "type"=>$request->type,
            "price"=>$request->price,
        ];

        return response()->json([$data]);
       ;
    }

    public  function  menu()
    {
 $menu=new Menu_model();
 $getmenu=$menu->get_menudata();
 echo "<pre>";
 var_dump($getmenu);
        echo "</pre>";
    }


}
