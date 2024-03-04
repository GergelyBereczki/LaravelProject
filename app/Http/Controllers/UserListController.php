<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    //
    function show(){
        $data=User::all();
        return view('userlist',['user'=>$data]);
    }
}
