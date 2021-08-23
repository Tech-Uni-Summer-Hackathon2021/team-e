<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>5-1:オブジェクトを理解する</title>
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
        <h3>5-1:オブジェクトを理解する</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        　オブジェクトの名前：年齢を表示する。
       </div>
       <div class="constreaint">
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
            const&nbsp;profiles&nbsp;=&nbsp;{<br>
                &nbsp;&nbsp;profiles:&nbsp;&nbsp;&nbsp;[<br>
                &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;&nbsp;name:&nbsp;"佐藤",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;age:&nbsp;22<br>
                &nbsp;&nbsp;&nbsp;&nbsp;},<br>
                &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;&nbsp;name:&nbsp;"鈴木",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;age:&nbsp;34<br>
                &nbsp;&nbsp;&nbsp;&nbsp;},<br>
                &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;&nbsp;name:&nbsp;"高橋",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;age:&nbsp;42<br>
                &nbsp;&nbsp;&nbsp;&nbsp;},<br>
                &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;&nbsp;name:&nbsp;"田中",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;age:&nbsp;15<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;]<br>
            }
        </div>
        <p>出力</p>
        <div class="output-result">
          <p class="child">
          佐藤:22<br>鈴木:34<br>高橋:42<br>田中:15
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
