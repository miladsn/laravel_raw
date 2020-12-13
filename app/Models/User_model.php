<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User_model extends Model
{
    public function get_user($data)
    {
        $userdata=DB::table("users")->select("*")->where($data)->get("");
        return $userdata;
    }
    use HasFactory;






}
