<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>4-1:中間地</title>
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
        <h3>4-1:中間地</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
      　N個の整数値を入力させ、N個の値のうちi番目に大きい値Mを
        出力せよ。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p>入力はすべて整数である。</p>
         <p>1&nbsp;&#8806;&nbsp;N&nbsp;&#8806;&nbsp;10<sup>9</sup</p>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">N&nbsp;&nbsp;&nbsp;i<br>
            N<sub>1</sub>,&nbsp;&nbsp;N<sub>2</sub>,&nbsp;&nbsp;N<sub>3</sub>,・・・N<sub>i</sub>
          </p>
        </div>
        <p>出力</p>
        <div class="output-result">
          <p class="child">M</p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
          5&nbsp;&nbsp;&nbsp;3<br>
          24&nbsp;&nbsp;&nbsp;19&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;25
          &nbsp;&nbsp;&nbsp;40</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">24</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            3&nbsp;&nbsp;&nbsp;2<br>
            253&nbsp;&nbsp;&nbsp;34&nbsp;&nbsp;&nbsp;34
          </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">34</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">
            8&nbsp;&nbsp;&nbsp;4<br>
            4342&nbsp;&nbsp;&nbsp;2343&nbsp;&nbsp;&nbsp;34&nbsp;&nbsp;&nbsp;2
            &nbsp;&nbsp;&nbsp;245&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4
            &nbsp;&nbsp;&nbsp;53&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2525
          </p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">53</p>
        </div>
      </div>
      <form action="{{ url('/result41')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem  = "4-1:中間地";
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
