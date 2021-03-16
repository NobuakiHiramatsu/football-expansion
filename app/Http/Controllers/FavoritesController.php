<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //お気に入りチームのデータ表示ページ
    public function index()
    {
        $user = \Auth::user();
        $favorite = $user->favorite()->first();
        //dd($favorite);
        
        return view('favorites.favorite', 
            ['favorite' => $favorite,]
        );
    }

    public function store(Request $request)
    {
        $request->user()->favorite()->create([
            'team_id' => $request->team_id,
        ]);
        

        return back();
    }

    public function destroy($id)
    {
        $favorite = \App\Favorite::find($id);
        //dd($favorite);
        //選択したレコードのuser_idと認証ユーザのidが同じなら削除
        if (\Auth::id() === $favorite->user_id) {
            $favorite->delete();
        }

        return back();
    }
}
