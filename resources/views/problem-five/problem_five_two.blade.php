<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>5-2:好きな数字</title>
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
        <h3>5-2:好きな数字</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        200という整数が大好きなリンゴさんのために、次の問題を解いてください。<br>
        N個の正整数からなる数列Aが与えられるので、以下の条件をすべて満たす整数の組(i,j)
        の個数を求めてください。
        <ul>
          <li>1&nbsp;&#8804;&nbsp;i&nbsp;&#8804;&nbsp;j&nbsp;&#8804;&nbsp;N</li>
          <li>A<sub>i</sub>&nbsp;ー&nbsp;A<sub>j</sub>は200の倍数である。</li>
        </ul>
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         入力は全て整数<br>
         2&nbsp;&#8804;&nbsp;N&nbsp;&#8804;&nbsp;10<sup>5</sup><br>
         1&nbsp;&#8804;&nbsp;A<sub>i</sub>&nbsp;&#8804;&nbsp;10<sup>9</sup><br>
       </p>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
            N<br>
            A<sub>1</sub>&nbsp;&nbsp;A<sub>2</sub>&nbsp;&nbsp;・・・&nbsp;&nbsp;A<sub>N</sub><br>
          </p>
        </div>
        <p>出力</p>
          答えを整数として出力せよ。
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
          6<br>
          123&nbsp;&nbsp;123&nbsp;&nbsp;&nbsp;&nbsp;123&nbsp;&nbsp;&nbsp;&nbsp;523&nbsp;&nbsp;&nbsp;&nbsp;200&nbsp;&nbsp;&nbsp;&nbsp;2000<br>
          </p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">4</p>
        </div>
        <p>例えば、(i,j)=(1,3)のとき、A<sub>1</sub>&nbsp;ー&nbsp;&nbsp;A<sub>3</sub>&nbsp;＝0は200の倍数です。<br>
        <p>(i,j)=(1,3),(1,4),(3,4),(5,6)の4つの条件を満たします。</p>
        </p>
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            5<br>
            1&nbsp;&nbsp;2&nbsp;&nbsp;3&nbsp;&nbsp;4&nbsp;&nbsp;5<br>
            </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">0</p>
        </div>

      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">
            8<br>
            199&nbsp;&nbsp;&nbsp;&nbsp;100&nbsp;&nbsp;200&nbsp;&nbsp;400&nbsp;&nbsp;300&nbsp;&nbsp;500&nbsp;&nbsp;600&nbsp;&nbsp;200<br>
          </p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">9</p>
        </div>
      </div>
      <form action="{{ url('/result52')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "5-2:好きな数字";
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
