<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboardmodel extends Model
{
    use HasFactory;
    public function  getdata()
    {

        $data=[
            "username"=>"gholi",

        ];

        $getuser=DB::table("users")->select("*");
        $getuser=$getuser->where($data);
        $getuser=$getuser->get();

        return $getuser;
    }
    public  function  inserter ()
    {
        $data=[
            "name"=>"mahmood",
            "lname"=>"davoodi",
            "username"=>"gholi",
            "password"=>"123456",

        ];
         $insert=DB::table("users")->insert($data);

    }

}
