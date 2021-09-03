<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>2-3:今、何時</title>
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
        2-3: 今、何時？
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        時刻のうち n 時の部分が日をまたいで 25 時となってしまった場合は 1 時とするよう
        に 0 時から 23 時までの 24 時間表記として正しい数値に修正するプログラムを作成
        してください。
      </div>
      <div class="output-oneblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">32</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">8</p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">71</p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">23</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">5</p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">5</p>
        </div>
      </div>
      <form action="{{ url('/result23')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = '2-3:今、何時';
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
          <input type='hidden' name='problem' value='<?= $problem ?>'>
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
