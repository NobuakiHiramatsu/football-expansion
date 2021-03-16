@extends('layouts.app')

@section('content')
    {{-- お気に入りしているチームのデータを表示　--}}
    <div>
        @if ($favorite)
            {{-- team_idを表示　--}}
            {{ $favorite->team_id }}
        @else
            <div>お気に入りチームを登録してください</div> 
            {!! link_to_route('myprofile', 'Myprofileへ', ['class' => 'btn btn-success']) !!} 
        @endif
        
    </div>
@endsection