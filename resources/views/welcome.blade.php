@extends('layouts.app')

@section('content')
    @if (Auth::check())
    {{--ログインできている場合--}}
        <div id="main">
            <h3>順位表</h3>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="#PL_results" class="nav-link active" data-toggle="tab">プレミアリーグ</a></li>
                <li class="nav-item"><a href="#PD_results" class="nav-link" data-toggle="tab">ラ・リーガ</a></li>
                <li class="nav-item"><a href="#SA_results" class="nav-link" data-toggle="tab">セリエA</a></li>
            </ul>
            <div class="tab-content">
                <div id="PL_results" class="tab-pane active">
                    <table class="table">
                        <tr>
                            <th class="text-center">順位</th>
                            <th class="text-center">クラブ</th>
                            <th class="text-center">Match</th>
                            <th class="text-center">W</th>
                            <th class="text-center">L</th>
                            <th class="text-center">D</th>
                            <th class="text-center">Points</th>
                        </tr>
                        <tbody class="PL_table">
    
                        </tbody>
                    </table>
                </div>    
    
                
                <div id="PD_results" class="tab-pane">
                    <table class="table">
                        <tr>
                            <th class="text-center">順位</th>
                            <th class="text-center">クラブ</th>
                            <th class="text-center">Match</th>
                            <th class="text-center">W</th>
                            <th class="text-center">L</th>
                            <th class="text-center">D</th>
                            <th class="text-center">Points</th>
                        </tr>
                        <tbody class="PD_table">
    
                        </tbody>
                    </table>
                </div>    
    
                
                <div id="SA_results" class="tab-pane">
                    <table class="table">
                        <tr>
                            <th class="text-center">順位</th>
                            <th class="text-center">クラブ</th>
                            <th class="text-center">Match</th>
                            <th class="text-center">W</th>
                            <th class="text-center">L</th>
                            <th class="text-center">D</th>
                            <th class="text-center">Points</th>
                        </tr>
                        <tbody class="SA_table">
    
                        </tbody>
                    </table>
                </div>   
                
            </div>
        </div>
        @section('script')
            <script src="{{ asset('/js/result.js') }}"></script>
        @endsection
    @else
    {{--ログインできていない場合--}}
        <div class="text-center mt-4">
            <h1>Welcome to FOOTBALL EXPANSION</h1>
            <p>このサイトではプレミアリーグ、ラ・リーガ、セリエAのリアルタイムの順位表、試合日程をまとめてチェックすることができます。</p>
            <p>また、自分のお気に入りのチームを登録することで、試合日程、試合結果をお気に入りチームだけに絞って閲覧できます</p>
            <p>これを利用して、より優雅な海外サッカー視聴ライフを実現しよう！！</p>

            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-md btn-primary']) !!}
        </div>
    @endif
@endsection