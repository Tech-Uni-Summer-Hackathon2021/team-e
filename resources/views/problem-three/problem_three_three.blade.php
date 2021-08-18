<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>3-3:フィボナッチ</title>
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
        <h3>3-3:フィボナッチ</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        以下のようにフィボナッチ数列が並んである。
        <p>1,　1,　2,　3,　5,　8,　13,　21,・・・N<sub>i</sub></p>
        <p>i番目の値を答えよ。</p>
       </div>
       <div class="constreaint">
       </div>
      <div class="output-oneblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">7</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">13</p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">14</p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">377</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">67</p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">44945570212853</p>
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
