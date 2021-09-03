<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>4-3:除去</title>
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
        <h3>4-3:除去</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
         長さNの整数列AとXが与えられます。<br>
         AからXと等しい要素を全て除き、残った要素をそのままの順序で並べた数列A'
         を出力してください。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p>入力値は整数である。</p>
         <p>1&nbsp;&#8806;&nbsp;N&nbsp;&#8806;&nbsp;10<sup>5</sup></p>
         <p>1&nbsp;&#8806;&nbsp;X&nbsp;&#8806;&nbsp;10<sup>9</sup></p>
         <p>1&nbsp;&#8806;&nbsp;A<sub>i</sub>&nbsp;&#8806;&nbsp;10<sup>9</sup></p>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
            N&nbsp;&nbsp;X<br>
            A<sub>1</sub>&nbsp;&nbsp;A<sub>2</sub>&nbsp;&nbsp;A<sub>3</sub>&nbsp;&nbsp;...&nbsp;&nbsp;A<sub>N</sub>&nbsp;&nbsp;
          </p>
        </div>
        <p>出力</p>
        A' の要素を空白区切りで順に出力せよ。

      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
          5&nbsp;&nbsp;5<br>
          3&nbsp;&nbsp;5&nbsp;&nbsp;6&nbsp;&nbsp;5&nbsp;&nbsp;4<br>
          </p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">
            3&nbsp;&nbsp;6&nbsp;&nbsp;4
          </p>
        </div>
        [3,5,6,5,4]から5を除くと、[3,6,4]になる。
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            3&nbsp;&nbsp;3<br>
            3&nbsp;&nbsp;3&nbsp;&nbsp;3
            </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">

          </p>
        </div>
        A'が要素0の数列となる場合がある。この場合、空白を出力するだけで構わない。
      </div>

      <form action="{{ url('/result43')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "4-3:除去";
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
