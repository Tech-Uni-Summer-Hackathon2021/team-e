<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>5-2:クイズ問題</title>
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
        <h3>5-2:クイズ問題</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        のび夫くんは、 N問のクイズに答えます。<br>
        のび夫くんの持っている点数ははじめ X点。クイズに正解すると 1点増え、不正解だと 1点減ります。
        ただし、持っている点数が0点のときに不正解となった場合は点数は減りません。
        のび夫くんのクイズの結果が文字列 Sで与えられます。<br>
        Sの左から i番目の文字が o のとき、i問目が正解だったことを、 x のとき、i問目が不正解だったことを表します。<br>
        のび夫くんの点数は最後何点になったでしょうか？
       </div>
       <div class="constreaint">
         <h3>制約</h3>
            <ul>
                <li>1<=N<=2×10<sup>5</sup></li>
                <li>0<=N<=2×10<sup>5</sup></li>
                <li>Sはoとxからなる長さNの文字列</li>
            </ul>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">N&nbsp;&nbsp;&nbsp;X<br>S
          </p>
        </div>
        <p>出力</p>
        <div class="output-result">
          <p class="child">のび夫くんの最後の点数</p></p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
              5&nbsp;0<br>xox</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">0</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            20&nbsp;199999<br>oooooooooxoooooooooo
          </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">200017</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">
            20&nbsp;10<br>
            xxxxxxxxxxxxxxxxxxxx
          </p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">0</p>
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
