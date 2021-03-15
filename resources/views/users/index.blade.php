@extends('layouts.app')

@section('content')
    {{-- ユーザデータ表示 --}}
    
    <div>
        <label for="name">name:</label>
        {{ $user -> name }}
    </div>
    <div>
        <label for="email">email:</label>
        {{ $user -> email}}
    </div>
    <div>
        <label for="favorite">favorite team:</label>
        {{-- ここにお気に入りチームの削除ボタンと未設定なら登録ボタン　--}}
    </div>
@endsection