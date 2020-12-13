<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Login_model extends Model
{

    public function  getdata($datas)
    {
        $data=[
            "username"=>$datas["username"],
            "password"=>md5($datas["password"]),
        ];
        $getuser=DB::table("users")->select("*");
        $getuser=$getuser->where($data);
        $getuser=$getuser->count();

        return $getuser;
    }
    use HasFactory;
}
