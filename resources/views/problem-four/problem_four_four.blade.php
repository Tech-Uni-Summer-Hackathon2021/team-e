<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>4-4:二番目に売れた本</title>
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
        <h3>4-4:二番目に売れた本</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
      　Tech.Uni国にはN冊の本があり、i個目の本の名前はS<sub>i</sub>売れた本の冊数はT<sub>i</sub>冊です。
        ２番目に売れた本の名前を答えてください。N個の本の名前、冊数はそれぞれ相違なることが
        保証されます。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         2&nbsp;&#8804;&nbsp;N&nbsp;&#8804;&nbsp;1000<br>
         1&nbsp;&#8804;&nbsp;(S<sub>i</sub>の長さ)&nbsp;&#8804;&nbsp;1000<br>
         1&nbsp;&#8804;&nbsp;T<sub>i</sub>の長さ&nbsp;&#8804;&nbsp;10<sup>5</sup><br>
         S<sub>i</sub>&nbsp;≠S<sub>j</sub>&nbsp;&#40;i&nbsp;≠&nbsp;j&#41;<br>
         T<sub>i</sub>&nbsp;≠T<sub>j</sub>&nbsp;&#40;i&nbsp;≠&nbsp;j&#41;<br>
         S<sub>i</sub>は英小文字、英大文字、数字のみからなる<br>
         N, T<sub>i</sub>は整数</p>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
            N<br>
            S<sub>1</sub>,&nbsp;&nbsp;T<sub>1</sub><br>
            S<sub>2</sub>,&nbsp;&nbsp;T<sub>3</sub><br>
            ・<br>
            ・<br>
            ・<br>
            S<sub>N</sub>,&nbsp;&nbsp;T<sub>N</sub>
          </p>
        </div>
        <p>出力</p>
        <p>2番目に売れた本の名前を出力せよ。</p>
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
          4<br>
          そして、バトンは渡された&nbsp;&nbsp;&nbsp;600043<br>
          温室デイズ&nbsp;&nbsp;&nbsp;104355<br>
          あと少し、もう少し&nbsp;&nbsp;&nbsp;335463<br>
          卵の緒&nbsp;&nbsp;&nbsp;469385
          </p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">卵の緒</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            2<br>
            海辺のカフカ&nbsp;&nbsp;&nbsp;189353<br>
            ノルウェイの森&nbsp;&nbsp;&nbsp;1354363
            </p>
          </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">ノルウェイの森</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">
            6<br>
            海の石&nbsp;&nbsp;&nbsp;55343<br>
            サル&nbsp;&nbsp;&nbsp;5453<br>
            北国の獅子&nbsp;&nbsp;&nbsp;89434<br>
            白昼夢&nbsp;&nbsp;&nbsp;3908<br>
            鏡の小鳥&nbsp;&nbsp;&nbsp;4<br>
            白狐&nbsp;&nbsp;&nbsp;4343553
          </p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">北国の獅子</p>
        </div>
      </div>
      <form action="{{ url('/result44')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "4-4:二番目に売れた本";
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
