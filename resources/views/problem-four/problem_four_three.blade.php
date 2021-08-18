<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>4-3:エラーの抽出</title>
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
        <h3>4-2:エラーの抽出</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
         以下ログファイルの中からエラーの内容だけを抜き出して表示せよ。
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
            const errorLogs = [ <br>
            &nbsp;&nbsp;&nbsp;"Error 101:Invalid Exception AAA - 2020/01/01/01:00", <br>
            &nbsp;&nbsp;&nbsp;"Error 3:Invalid Exception BBB - 2020/01/01/02:00", <br>
            &nbsp;&nbsp;&nbsp;"Error 22:Invalid Exception CCCCC - 2020/01/01/03:00" <br>
            ]
          </p>
        </div>
        <p>出力</p>
        <div class="output-result">
          <p class="child">
            Invalid Exception AAA <br>
            Invalid Exception BBBB <br>
            Invalid Exception CCCCC
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
