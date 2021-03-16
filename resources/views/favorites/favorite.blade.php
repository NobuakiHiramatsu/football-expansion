@extends('layouts.app')

@section('content')
    {{-- お気に入りしているチームのデータを表示　--}}
    <div>
        @if ($favorite)
            {{-- 認証ユーザのidに該当するお気に入りがある場合 --}}
            <div class="your_team mt-4">

            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="#fv_results" class="font nav-link active" data-toggle="tab">直近10試合結果</a></li>
                <li class="nav-item"><a href="#fv_schedules" class="font nav-link" data-toggle="tab">先10試合の試合日程</a></li>
            </ul>
            <div class="tab-content">
                <div id="fv_results" class="tab-pane active">
                    <table class="table">
                        <tr>
                            <th class="text-center">TIME</th>
                            <th class="text-center">COMPETITION</th>
                            <th class="text-center">HOME</th>
                            <th class="text-center">SCORE</th>
                            <th class="text-center">AWAY</th>
                        </tr>
                        <tbody class="fv_result">

                        </tbody>
                    </table>
                </div>

                <div id="fv_schedules" class="tab-pane">
                    <table class="table">
                        <tr>
                            <th class="text-center">COMPETITION</th>
                            <th class="text-center">HOME</th>
                            <th class="text-center">TIME</th>
                            <th class="text-center">AWAY</th>
                        </tr>
                        <tbody class="fv_schedule">

                        </tbody>
                    </table>
                </div>
            </div>
            <script>
                window.js_favorite= @json($favorite); 
            </script>
            @section('script')
                <script src="{{ asset('/js/favorite.js') }}"></script>
            @endsection
        @else
            {{--　お気に入りチームが登録されてない場合 --}}
            <div>お気に入りチームを登録してください</div> 
            {!! link_to_route('myprofile', 'Myprofileへ', ['class' => 'btn btn-success']) !!} 
        @endif
        
    </div>
@endsection