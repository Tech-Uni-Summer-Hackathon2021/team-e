<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>3-5:偶数組の数</title>
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
        <h3>3-5:偶数組の数</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        <p>N+M個のボールがあります。各ボールには整数が 1つ書かれています。</p>
        <p>これらのボールに書かれている数について、</p>
        <ul>
          <li>N個のボールに書かれている数は偶数</li>
          <li>M個のボールに書かれている数は奇数</li>
        </ul>
        <p>であることがわかっています。</p>
        <p>これらの N+M 個のボールの中から2つ選んで、書かれた数の和が偶数になる方法の
          数を求めてください。選ぶ順序は考慮しません</p>
        <p>なお、この方法の数はボールに書かれている整数の実際の値によらないことが示せます。</p>
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p>0&nbsp;&#8806;&nbsp;N, M&nbsp;&#8806;&nbsp;100<sup></sup></p>
         <p>2&nbsp;&#8806;&nbsp;N + M</p>
         <p>入力はすべて整数である。</p>
       </div>
      <div class="output-oneblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">2&nbsp;&nbsp;&nbsp;1</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">1</p>
        </div>
      </div>
      <p>例えば３つのボールに書かれている数がそれぞれ、１，２，４であるとすると、</p>
      <ul>
        <li>１が書かれたボールと２が書かれたボールを選ぶと、和は奇数</li>
        <li>１が書かれたボールと４が書かれたボールを選ぶと、和は奇数</li>
        <li>２が書かれたボールと４が書かれたボールを選ぶと、和は偶数</li>
      </ul>
      <p>であるので、答えは１です。</p>
      <div class="output-twoblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">4&nbsp;&nbsp;&nbsp;3</p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">9</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">1&nbsp;&nbsp;&nbsp;1</p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">0</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例４</p>
        <div class="output-result">
          <p class="child">13&nbsp;&nbsp;&nbsp;3</p>
        </div>
        <p>出力例４</p>
        <div class="output-result">
          <p class="child">81</p>
        </div>
      </div>
      <form action="{{ url('/result35')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = "3-5:分布表";
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
