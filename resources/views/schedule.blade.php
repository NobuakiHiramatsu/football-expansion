@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div id="main">
            <h3>試合日程</h3>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="#PL_sche" id ="PL_click" class="nav-link active" data-toggle="tab">プレミアリーグ</a></li>
                <li class="nav-item"><a href="#PD_sche" id ="PD_click" class="nav-link" data-toggle="tab">ラ・リーガ</a></li>
                <li class="nav-item"><a href="#SA_sche" id ="SA_click" class="nav-link" data-toggle="tab">セリエA</a></li>
            </ul>
            <div class="tab-content">
                <div id="PL_sche" class="tab-pane active">
                    <ul class="nav nav-tabs PL_setsu">

                    </ul>
                    <div class="tab-content PLmatches">
                        
                    </div>
                </div>    

                
                <div id="PD_sche" class="tab-pane">
                    <ul class="nav nav-tabs PD_setsu">
                        
                    </ul>
                    <div class="tab-content PDmatches">

                    </div>
                </div>    

                
                <div id="SA_sche" class="tab-pane">
                    <ul class="nav nav-tabs SA_setsu">
                        
                    </ul>
                    <div class="tab-content SAmatches">

                    </div>
                </div>   
                
            </div>
        </div>
        @section('script')
            <script src="{{ asset('/js/schedule.js') }}"></script>
        @endsection
    @else
        {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-md btn-primary']) !!}
    @endif
@endsection