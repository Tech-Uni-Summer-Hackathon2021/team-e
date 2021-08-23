<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>4-5:小さい順に並び替え</title>
    <link href="../../../public/css/problem-one.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <div class="header-logo">Tech.Uni</div>
      <div class="header-ul">
        <ul>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>
    </header>
    <main>
      <div class="question">
        <h3>4-5:小さい順に並び替え</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        コマンドライン引数で渡された数を小さい順に並べた配列を生成してconsole.log()で出力してください。ただしArray型のメソッドを使うことを禁止します(push()を除く)。入力される数値は0以上9999以下とします。
      </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
          2&nbsp;&nbsp;&nbsp;13&nbsp;&nbsp;&nbsp;42&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;25&nbsp;&nbsp;&nbsp;59&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;13 &nbsp;&nbsp;&nbsp;12&nbsp;&nbsp;&nbsp;11&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;2
         </p>
        </div>
        <p>出力</p>
        <div class="output-result">
          <p class="child">
          [<br>
            1,  2,  2,  4,<br>
            5,  10, 11, 12,<br>
            13, 13, 25, 42,<br>
            59<br>
            ]
          </p>
        </div>
      </div>
      <form action="{{ url('/top')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
            $language = array("python","ruby","javascript");
           ?>
          <div class="select-option">
            <div class="language">
              言語
            </div>
            <select  name="select">
              <option value="未選択">選択してください</option>
              <?php
                foreach($language as $lang){
                  echo "<option  value='{$lang}'>{$lang}</option>";
                }
              ?>
            </select>
          </div>
          <p>ソースコード:</p>
          <textarea name="name"  rows="8" cols="80" spellcheck="false"></textarea>
        </div>
        <div class="main-button">
          <button type="submit" name="message">解答</button>
        </div>
      </form>
      <div class="footer">
        <a href="/problem">>問題一覧</a>
      </div>
    </main>
    <footer>
    </footer>
  </body>
</html>
