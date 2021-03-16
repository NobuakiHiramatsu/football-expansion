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
        @if ($favorite)

            {{ $favorite -> team_id}}
            {{-- ここにお気に入りチームの削除ボタンと未設定なら登録ボタン　--}}
            {!! Form::open(['route' => ['favorites.destroy', $favorite->id], 'method' => 'delete']) !!}
                {!! Form::submit('お気に入りチーム変更', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
        @else
            <div id="main">
                <p class="topic"><img src="image/icons8-soccer-ball-64.png" alt="soccerball">チーム選択</p>
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="#PL_favorite" class="font nav-link active" data-toggle="tab">プレミアリーグ</a></li>
                        <li class="nav-item"><a href="#PD_favorite" class="font nav-link" data-toggle="tab">ラ・リーガ</a></li>
                        <li class="nav-item"><a href="#SA_favorite" class="font nav-link" data-toggle="tab">セリエA</a></li>
                    </ul>
                {!! Form::open(['route' => ['favorites.store']]) !!}
                    {{--ここにチーム選択画面表示 --}}
                    <div class="tab-content">
                        <div id="PL_favorite" class="tab-pane active">
                            <div>
                                {!! Form::radio('team_id', 58) !!}
                                {{Form::label('team','AstonVilla FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 57) !!}
                                {{Form::label('team','Arsenal FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 397) !!}
                                {{Form::label('team','Brighton & Hove Albion FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 328) !!}
                                {{Form::label('team','Burnley FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 61) !!}
                                {{Form::label('team','Chelsea FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 354) !!}
                                {{Form::label('team','Crystal Palace FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 62) !!}
                                {{Form::label('team','Everton FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 63) !!}
                                {{Form::label('team','Fulham FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 341) !!}
                                {{Form::label('team','Leeds United FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 338) !!}
                                {{Form::label('team','Leicester City FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 64) !!}
                                {{Form::label('team','Liverpool FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 65) !!}
                                {{Form::label('team','Manchester City FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 66) !!}
                                {{Form::label('team','Manchester United FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 67) !!}
                                {{Form::label('team','Newcastle United FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 340) !!}
                                {{Form::label('team','Southampton FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 73) !!}
                                {{Form::label('team','Tottenham Hotspur FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 74) !!}
                                {{Form::label('team','West Bromwich Albion FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 563) !!}
                                {{Form::label('team','Westham United FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 76) !!}
                                {{Form::label('team','Wolverhampton Wanderers FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 356) !!}
                                {{Form::label('team','Sheffield United FC')}}
                            </div> 
                        </div>
    
                        <div id="PD_favorite" class="tab-pane">
                            <div>
                                {!! Form::radio('team_id', 77) !!}
                                {{Form::label('team','Athletic Club Bilbao')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 78) !!}
                                {{Form::label('team','Atletico de Madrid')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 264) !!}
                                {{Form::label('team','Cádiz CF')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 79) !!}
                                {{Form::label('team','CA Osasuna')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 263) !!}
                                {{Form::label('team','Ddeportivo Alaves')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 285) !!}
                                {{Form::label('team','Elche CF')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 81) !!}
                                {{Form::label('team','FC Barcelona')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 82) !!}
                                {{Form::label('team','Getafe CF')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 83) !!}
                                {{Form::label('team','Granada CF')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 88) !!}
                                {{Form::label('team','Levante UD')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 90) !!}
                                {{Form::label('team','Real Betis Balompie')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 558) !!}
                                {{Form::label('team','RC Celta de Vigo')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 86) !!}
                                {{Form::label('team','Real Madrid CF')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 92) !!}
                                {{Form::label('team','Real Sociedad de Fútbol')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 250) !!}
                                {{Form::label('team','Real Valladolid CF')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 278) !!}
                                {{Form::label('team','SD Eibar')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 559) !!}
                                {{Form::label('team','Sevilla FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 299) !!}
                                {{Form::label('team','SD Huesca')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 95) !!}
                                {{Form::label('team','Valencia CF')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 94) !!}
                                {{Form::label('team','Villarreal CF')}}
                            </div> 
                        </div>
    
                        <div id="SA_favorite" class="tab-pane">
                            <div>
                                {!! Form::radio('team_id', 98) !!}
                                {{Form::label('team','AC Milan')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 99) !!}
                                {{Form::label('team','ACF Fiolentina')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 100) !!}
                                {{Form::label('team','AS Roma')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 102) !!}
                                {{Form::label('team','Atalanta BC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 1106) !!}
                                {{Form::label('team','Benevneto Calcio SpA')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 103) !!}
                                {{Form::label('team','Bologna CFC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 104) !!}
                                {{Form::label('team','Cagliari Calcio')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 472) !!}
                                {{Form::label('team','FC Crotone')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 108) !!}
                                {{Form::label('team','FC Internazionale Milano')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 107) !!}
                                {{Form::label('team','Genoa CFC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 450) !!}
                                {{Form::label('team','Hellas Verona FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 109) !!}
                                {{Form::label('team','Juventus FC')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 112) !!}
                                {{Form::label('team','Parma Calcio 1913')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 488) !!}
                                {{Form::label('team','Spezia Calcio')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 110) !!}
                                {{Form::label('team','SS Lazio')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 113) !!}
                                {{Form::label('team','SSC Napoli')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 586) !!}
                                {{Form::label('team','Torino FC 1906')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 584) !!}
                                {{Form::label('team','UC Sampdoria')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 115) !!}
                                {{Form::label('team','Udinese Calcio')}}
                            </div>
                            <div>
                                {!! Form::radio('team_id', 471) !!}
                                {{Form::label('team','US Sassuolo Calcio')}}
                            </div> 
                        </div>
                    </div>
                    {!! Form::submit('選択したチームをお気に入りチームに登録', ['class' => 'btn btn-success btn-sm']) !!}
                {!! Form::close() !!}
            </div>
        @endif
            
    </div>
@endsection