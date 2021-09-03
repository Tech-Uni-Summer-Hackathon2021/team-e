<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>4-8:探索</title>
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
        <h3>4-8:探索</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        縦H行、横W列のマス目があり、いくつかのマスには障害物が置かれている。<br>
        上からi番目、左からj番目のマスをマス(i,j)と表すことにする。<br>
        H個の文字列S<sub>1</sub>,S<sub>2</sub>,S<sub>3</sub>・・・,S<sub>H</sub>が
        与えられます。S<sub>i</sub>のj文字目はマス(i,j)の状態を表し、#なら障害物が
        置かれていることを、.なら障害物が置かれていないことを表す。<br>
        このマス目上のあるマスからあるマスが見えるとは、2つのマスが同じ行または列にあり、
        2つのマスの間(2つのマス自身を含む)に障害物が1つも置かれていないことを意味する。<br>
        このマス目上のマスであって、マス(X,Y)から見えるもの(マス(X,Y)自身を含む)の数を
        求めよ。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         1&nbsp;&#8804;&nbsp;H&nbsp;&#8804;&nbsp;100<br>
         1&nbsp;&#8804;&nbsp;W&nbsp;&#8804;&nbsp;100<br>
         1&nbsp;&#8804;&nbsp;X&nbsp;&#8804;&nbsp;H<br>
         1&nbsp;&#8804;&nbsp;Y&nbsp;&#8804;&nbsp;W<br>
         S<sub>i</sub>&nbsp;"&nbsp;.&nbsp;"&nbsp;および&nbsp;"&nbsp;#&nbsp;"&nbsp;のみからなる長さWの文字列<br>
         マス(X,Y)に障害物は置かれていない。

       </p>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">
            H&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;Y<br>
            S<sub>1</sub><br>
            S<sub>2</sub><br>
            S<sub>3</sub><br>
            ・<br>
            ・<br>
            ・<br>
            S<sub>H</sub>
          </p>
        </div>
        <p>出力</p>
        <p>答えを出力せよ。</p>
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
            4&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;2<br>
            ＃＃．．<br>
            ．．．＃<br>
          ＃．＃．<br>
            ．＃．＃<br>
          </p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">4</p>
        </div>
        <p>以下がマス(2,2)から見えるマスである。</p>
        マス(2,1)<br>
        マス(2,2)<br>
        マス(2,3)<br>
        マス(3,2)
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            3&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;4<br>
            ＃．．．．<br>
            ＃＃＃＃＃<br>
            ．．．．＃<br>
          </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">4</p>
        </div>
        <p>行または列が同じでも、間に障害物があるようなマスは見えない。</p>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">
            5&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;2<br>
            ．＃．．＃<br>
            ＃．＃＃＃<br>
            ＃＃．．．<br>
            ＃．．＃．<br>
            ＃．＃＃＃<br>
          </p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">3</p>
        </div>
      </div>
      <form action="{{ url('/result48')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
            $language = array("python","ruby","javascript");
            $problem = "4-8:探索";
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
