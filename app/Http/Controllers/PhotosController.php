<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Usermodel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class PhotosController extends Controller
{
    public  function index(){


//       $users = DB::select('select * from users');
//$users= Usermodel::;
       $users = DB::table('users')->select('*')->get();
//        $userData = new Usermodel();
//        $users=$userData->getdata();



////        return view::make('posts')->with('posts', $data);
//        return view('posts',$data);
        return view('posts',compact('users'));
    }

}
