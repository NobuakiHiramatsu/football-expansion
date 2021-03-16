<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Favorite;

class UsersController extends Controller
{
    //
    public function index(){
        //認証ユーザデータを取得
        $user = \Auth::user();
        //dd($user->favorite());
        $favorite = $user->favorite()->first();
        //dd($favorite);
        //ユーザページでデータを表示
        return view('users.index',
            [ 'user' => $user,'favorite' => $favorite,]
        );  
    }
}
