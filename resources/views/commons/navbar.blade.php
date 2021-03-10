<header>
    <nav class="navbar navbar-expand-md">
        <a href="" class="navbar-brand font-weight-bold">Football Expansion</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-bar" aria-controls="nav-bar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="nav-bar">
            <ul class="navbar-nav">
                {{-- ユーザ登録のリンク--}}
                <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link font-weight-bold']) !!}</li>
                {{-- ログインのリンク　--}}
                <li class="nav-item"><a href="" class="nav-link font-weight-bold" data-toggle="collapse" data-target=".navbar-collapse.show">Login</a></li>
            </ul>
        </div>
    </nav>
</header>