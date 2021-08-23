<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>5-3:はじてのおつかい</title>
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
        <h3>5-3:はじてのおつかい</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        駄菓子屋で N種類のお菓子、お菓子 1,...,Nが売られており、それぞれの価格は1個あたり p<sub>1</sub>,...,p<sub>N</sub>円です。
        この店でK種類のお菓子を1個ずつ買うとき、それらの合計価格として考えられる最小の金額を求めてください。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
            <ul>
                <li>1<=K<=N<=1000</li>
                <li>0<=p<sub>i</sub><=1000</li>
                <li>入力値はすべて整数</li>
            </ul>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">N&nbsp;K<br>p<sub>1</sub>&nbsp;p<sub>2</sub>&nbsp;...&nbsp;p<sub>3</sub>
          </p>
        </div>
        <p>出力</p>
        <div class="output-result">
          <p class="child">果物の最小の合計価格</p></p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
              5&nbsp;3<br>50&nbsp;100&nbsp;80&nbsp;120&nbsp;80</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">210</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            1&nbsp;1<br>1000
          </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">1000</p>
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
