<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>3-4:反転</title>
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
        <h3>3-4:反転</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
         コマンドライン引数で受け取った2つの値A, Bを反転させて足し合わせたNを出力せよ。　
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p>入力値は整数である。</p>
         <p>A, Bの桁数は奇数である。</p>
         <p>1&nbsp;&#8806;&nbsp;A, B&nbsp;&#8806;&nbsp;10<sup>6</sup></p>
       </div>
      <div class="output-oneblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">341&nbsp;&nbsp;&nbsp;842</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">391</p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">9&nbsp;&nbsp;&nbsp;6284</p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">54836</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">7248427&nbsp;&nbsp;&nbsp;824365149</p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">948501855</p>
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
