<?php

namespace App\Http\Controllers;

use App\Entame_Users
use Illuminate\Http\Request;

class Entame_Users_Controller extends Controller
{
    public function view_entameuser(Request $request,Entame_Users $entame_users){
        //$guardedに指定していないものは全て取り入れる。
        $entame_users->update($request->all());

        return view('home',compact('name','rented_device_num','created_at','updated_at'));
    }
}
