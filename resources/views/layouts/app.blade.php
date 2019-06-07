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
        <h1 class="header__logo">Toritter</h1>
        <div class="header__button">
            <a class="header__list--button">投稿する</a>
            <a class="header__list--button">ログイン</a>
        </div>
      </div>
    </header>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>