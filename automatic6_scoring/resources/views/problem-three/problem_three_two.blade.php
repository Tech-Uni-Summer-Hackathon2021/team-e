<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>3-2:図形作成</title>
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
        <h3>3-2:図形作成</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        コマンドライン引数の1つ目を縦、2つ目を横の数とし"*-"が連続した四角形を作る。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p>奇数行は、"*"から始まるが、偶数行は"-"から始める。</p>
       </div>
      <div class="output-oneblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">4&nbsp;&nbsp;&nbsp;7</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">*-*-*-*<br>-*-*-*-<br>*-*-*-*<br>-*-*-*-</p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">1&nbsp;&nbsp;&nbsp;3</p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">*-*</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">6&nbsp;&nbsp;&nbsp;6</p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">*-*-*-<br>-*-*-*<br>*-*-*-<br>-*-*-*<br>*-*-*-<br>-*-*-*<br></p>
        </div>
      </div>
      <form action="{{ url('/result32')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "3-2:図形作成";
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
	<input type="hidden" name="problem" value="<?= $problem ?>">
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
