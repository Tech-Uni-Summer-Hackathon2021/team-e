
<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>はじめに</title>
    <link href="css/welcome.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="body-ul">
      <div class="header">
        <div class="header-logo">はじめに</div>
        <div class="header-list">
          <ul>
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}" class="">Home</a></li>
                    @else
                      <li><a href="{{ route('login') }}" class="">ログイン</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="">登録</a></li>
                        @endif
                    @endauth
            @endif
          </ul>
        </div>
      </div>
      <main>
        <img class="automatic" src="/img/automatic.png">
        <div class="main-top">
          <h3>当サイトの進め方</h3>
        </div>

      </main>
    </div>

  </body>
</html>
