<?php

namespace App\Http\Controllers;

use App\Entame_Users;
use Illuminate\Http\Request;

class Entame_Users_Controller extends Controller
{
    public function view_entameuser(Request $request,Entame_Users $entame_users){
        $test_id = '1';

        //$data = Entame_Users::('id',$test_id)->first();
        $name = 'サンプル';
        $ented_device_num = 'テスト';

        return view('home',compact('name','ented_device_num'));
    }
}
