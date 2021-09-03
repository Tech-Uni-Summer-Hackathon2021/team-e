<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>2-5:お支払い</title>
    <link href="css/problem-one.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <div class="header-logo"><a href="/home">Tech.Uni</a></div>
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
        <h3>2-5:お支払い</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        コマンドライン引数で指定した金額N円を100円玉と10円玉と1円玉だけで、できるだけ
        少ない枚数で支払いたい。金額を入力するとそれぞれの枚数を計算して表示するプ
        ログラムを作成せよ。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p> 1&nbsp;&#8806;&nbsp;N&nbsp;&#8806;&nbsp;10<sup>6</sup></p>
       </div>
      <div class="output-oneblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">12345</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">123 4 5</p>
        </div>
      </div>
      <p>100円玉が123枚、10円玉が4枚、1円玉が5枚</p>
      <div class="output-twoblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">345</p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">3 4 5</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">628403</p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">6284 0 3</p>
        </div>
      </div>
      <form action="{{ url('/result25')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "2-5:お支払い";
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
          <input type='hidden' name="problem" value='<?= $problem ?>'>
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
