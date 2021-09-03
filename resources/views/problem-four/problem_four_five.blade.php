<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>4-5:回文</title>
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
        <h3>4-5:回文</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        整数 N が与えられます。Nを十進法で表した文字列の先頭に 0 個以上の 0 をつけるこ
        とで、回文にすることはできますか？
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         0&nbsp;&#8804;&nbsp;N&nbsp;&#8804;&nbsp;10<sup>9</sup><br>
       </p>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
            N<br>
          </p>
        </div>
        <p>出力</p>
        <p>回文にできるならYes、できないならNoを出力せよ。</p>
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
          1210
          </p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">Yes</p>
        </div>
        <p>1210の先頭に１個を0をつけると012120となり回文になります。</p>
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            777
            </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">Yes</p>
        </div>
        <p>777はもともと回文です。</p>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">
            123456789
          </p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">No</p>
        </div>
      </div>
      <form action="{{ url('/result45')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "4-5:回文";
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
