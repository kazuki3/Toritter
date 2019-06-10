<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Toritter</title>
    <link rel="stylesheet" href="css/common.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    @yield('stylesheet')
  </head>
  <body>
    <header class="header">
      <div class="header-container">
        <a href="{{ route('top') }}">
          <h1 class="header__logo">Toritter</h1>
        </a>
        <div class="header__button">
          @if( Auth::check() )
            <a href="{{ route('post') }}" class="header__list--button">投稿する</a>
            <a class="header__list--button-logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="header__list--button">ログアウト</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
          @else
            <a href="{{ route('login') }}" class="header__list--button">ログイン</a>
            <a href="{{ route('register') }}" class="header__list--button">新規登録</a>
          @endif
        </div>
      </div>
    </header>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
