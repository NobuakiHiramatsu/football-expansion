<header>
    <nav class="navbar navbar-expand-md">
        <a href="/" class="navbar-brand font-weight-bold">Football Expansion</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-bar" aria-controls="nav-bar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="nav-bar">
            <ul class="navbar-nav">
                @if (Auth::check())
                {{-- ログイン済みの場合の表示　--}}
                    <li class="nav-item">{!! link_to_route('welcome', 'Results', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                    <li class="nav-item">{!! link_to_route('schedule', 'Schedule', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
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