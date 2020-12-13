<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu_model extends Model
{

    public function get_menudata()
    {

       $data= new \stdClass();
       $data->prime=array();
    $result_prime= DB::table("menu")->select("*")->where(["position"=>0])->get();

foreach ($result_prime as $row=>$val)
{
    $primeid=$val->id;
    $data->prime[]=$val;

    $result_sub1= DB::table("menu")->select("*")->where(["prime"=>$primeid]);
    $count_sub=$result_sub1->count();
    $result_sub=$result_sub1->get();
    $data->numbersub[]=$count_sub;
    $data->sub[]=$result_sub;
}

    return (array) $data;
    }


    use HasFactory;
}
