<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    //
    public function index(){
        //認証ユーザデータを取得
        $user = \Auth::user();

        //ユーザページでデータを表示
        return view('users.index',
            [ 'user' => $user,]
        );  
    }
}
