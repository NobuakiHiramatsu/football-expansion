<header>
    <div class="head">
        <a href="/welcome" class="logo text-center font-weight-bold">Football Expansion</a>
    </div>
    <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                @if (Auth::check())
                {{-- ログイン済みの場合の表示　--}}
                    <li class="nav-item">{!! link_to_route('welcome', 'Results', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                    <li class="nav-item">{!! link_to_route('schedule', 'Schedule', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                    <li class="nav-item">{!! link_to_route('favorites.index', 'Favorite', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                    <li class="nav-item">{!! link_to_route('myprofile', 'Myprofile', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                    
                    {{--　ログアウトのリンク　--}}
                    <li class="nav-item">{!! link_to_route('logout.get', 'Logout', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                @else
                {{--　未ログインの場合の表示　--}}
                    {{-- ユーザ登録のリンク--}}
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                    {{-- ログインのリンク　--}}
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                @endif    
                
            </ul>
        </div>
    </nav>
</header>