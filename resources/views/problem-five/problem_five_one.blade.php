<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>5-1:変換</title>
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
        <h3>5-1:変換</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        長さ2Nの文字列Sがあります。<br>
        この文字列に対してQ個のクエリが与えられます。i番目のクエリでは3つの整数T<sub>i</sub>
        ,A<sub>i</sub>,B<sub>i</sub>が与えられるので、以下の処理をします。
        <ul>
          <li>T<sub>i</sub>＝１のとき:SのA<sub>i</sub>文字目とB<i>文字目を入れ替える。</li>
          <li>T<sub>i</sub>＝２のとき:Sの前半N文字と後半N文字を入れ替える(A<sub>i</sub>,B<sub>i</sub>の値は用いない)</li>
          <li>例えばSがFLIPのときにこのクエリを処理すると、SはIPFLとなる。</li>
        </ul>
        これらQ個のクエリを与えられた順にすべて処理した後のSを出力してください。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         1&nbsp;&#8804;&nbsp;N&nbsp;&#8804;&nbsp;10<sup>5</sup><br>
         Sは長さ２Nの英大文字のみからなる文字列<br>
         1&nbsp;&#8804;&nbsp;Ｑ&nbsp;&#8804;&nbsp;10<sup>5</sup><br>
         T<sub>i</sub>は１または２<br>
         T<sub>i</sub>=1のとき、1&nbsp;&#8804;&nbsp;A<sub>i</sub>&nbsp;&#8804;&nbsp;B<sub>i</sub>&nbsp;&#8804;&nbsp;2N<br>
         T<sub>i</sub>=2のとき、A<sub>i</sub>=B<sub>i</sub>=0<br>
       </p>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
            N<br>
            S<br>
            Q<br>
            T<sub>1</sub>&nbsp;&nbsp;A<sub>1</sub>&nbsp;&nbsp;B<sub>1</sub><br>
            T<sub>2</sub>&nbsp;&nbsp;A<sub>2</sub>&nbsp;&nbsp;B<sub>2</sub><br>
            T<sub>3</sub>&nbsp;&nbsp;A<sub>3</sub>&nbsp;&nbsp;B<sub>3</sub><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.<br>
            T<sub>Q</sub>&nbsp;&nbsp;A<sub>Q</sub>&nbsp;&nbsp;B<sub>Q</sub><br>
          </p>
        </div>
        <p>出力</p>
        <p>クエリ処理後のＳを出力せよ。</p>
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
          2<br>
          FLIP<br>
          2<br>
          2&nbsp;&nbsp;0&nbsp;&nbsp;0<br>
          1&nbsp;&nbsp;1&nbsp;&nbsp;4<br>
          </p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">LPFI</p>
        </div>
        <p>1番目のクエリではSの前半N文字と後半N文字を入れ替えるため、SはIPFLとなる。</p><br>
        <p>2番目のクエリではSの1文字目と4文字目を入れ替えるため、SはLPFIとなります。
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            2<br>
            FLIP<br>
            6<br>
            1&nbsp;&nbsp;1&nbsp;&nbsp;3<br>
            2&nbsp;&nbsp;0&nbsp;&nbsp;0<br>
            1&nbsp;&nbsp;1&nbsp;&nbsp;2<br>
            1&nbsp;&nbsp;2&nbsp;&nbsp;3<br>
            2&nbsp;&nbsp;0&nbsp;&nbsp;0<br>
            1&nbsp;&nbsp;1&nbsp;&nbsp;4<br>

            </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">ILPF</p>
        </div>

      </div>

      <form action="{{ url('/result51')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "5-1:変換";
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
