<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>4-7:大文字小文字</title>
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
        <h3>4-7:大文字小文字</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        N個の大文字小文字が含まれる文字列が渡される。
        それらをアルファベット順に並び変え、全て小文字で表示せよ。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p>大文字は先頭のみである。</p>
         <p>先頭の文字はすべて互いに異なる</p>
         <p>1&nbsp;&#8806;&nbsp;N<sub>i</sub>&nbsp;&#8806;&nbsp;10&nbsp;(桁数)</p>
       </div>
       <div class="output-oneblock">
         <p>入力</p>
         <div class="output-result">
           <p class="child">
             N<br>
             N<sub>1</sub>,&nbsp;&nbsp;N<sub>2</sub>,&nbsp;&nbsp;N<sub>3</sub>,・・・N<sub>i</sub>
           </p>
         </div>
         <p>出力</p>
          <p>すべて小文字のアルファベット順</p>
       </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
            7<br>
          Suzuki　Yamada　Sato　Ito　Tanaka　Takahashi　Ando　
          </p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">ando sato takahashi tanaka yamada</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            3<br>
            Osimi Yamaguti Toritani
            </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">
            osimi toritani yamaguti
          </p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">
            8 <br>
            Baba Oki Minauti Kinosita Aoki Toritani Sato Nakano
          </p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">
            Aoki Baba Kinosita Minauti Nakano Oki Toritani
          </p>
        </div>
      </div>
      <form action="{{ url('/result47')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "4-7:大文字小文字";
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
