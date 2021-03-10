@extends('layouts.app')

@section('content')
    <div class="text-center mt-4">
        <h1>Welcome to FOOTBALL EXPANSION</h1>
        <p>このサイトではプレミアリーグ、ラ・リーガ、セリエAのリアルタイムの順位表、試合日程をまとめてチェックすることができます。</p>
        <p>また、自分のお気に入りのチームを登録することで、試合日程、試合結果をお気に入りチームだけに絞って閲覧できます</p>
        <p>これを利用して、より優雅な海外サッカー視聴ライフを実現しよう！！</p>

        {{-- ユーザ登録ページへのリンク --}}
        {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-md btn-primary']) !!}
    </div>
@endsection