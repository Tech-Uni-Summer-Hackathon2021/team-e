<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>3-1:ハーモニー</title>
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
        <h3>3-1:ハーモニー</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        相違なる整数 A, Bがあります。|A−K|=|B−K|となるような整数 Kを出力してください。
        そのような整数が存在しなければ、代わりに IMPOSSIBLE を出力してください。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p>入力はすべて整数である。</p>
         <p> 0&nbsp;&#8806;&nbsp;A, B&nbsp;&#8806;&nbsp;10<sup>9</sup></p>
         <p>AとBは相違なる。</p>
       </div>
      <div class="output-oneblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">2 16</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">9</p>
        </div>
      </div>
      <p>|2-9| = 7,|16-9| = 7であるため、9は条件を満たす整数である。</p>
      <div class="output-twoblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">0 3</p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">IMPOSSIBLE</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">998244353 99824435</p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">549034394</p>
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
