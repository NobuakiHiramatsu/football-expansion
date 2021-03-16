<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $fillable = ['team_id'];

    //Userモデルとの関係を定義
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
