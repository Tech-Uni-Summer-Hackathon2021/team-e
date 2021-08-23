<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>5-4:りんご</title>
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
        <h3>5-4:りんご</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        沢山のりんごがあります。どのりんごも重さはAグラム以上Bグラム以下です。（りんごの重さは整数とは限りません。）
        この中からいくつかのりんごを選んだとき、選んだりんごの重さの合計がちょうどWキログラムになりました。
        選んだりんごの個数として考えられる最小値と最大値を求めてください。
        ただし、もし起こり得ない場合は、Moと報告してください。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
            <ul>
                <li>1<=A<=B<=1000</li>
                <li>1<=W<=1000</li>
                <li>入力値はすべて整数</li>
            </ul>
       </div>
      <div class="output-oneblock">
        <p>入力</p>
        <div class="output-result">
          <p class="child">A&nbsp;B&nbsp;W</p>
          </p>
        </div>
        <p>出力</p>
        <div class="output-result">
          <p class="child">
            選んだりんごの個数としてありえる最小値と最大値をこの順で空白で区切る。<br>
            条件に合うような個数が存在しないとき、 Noと出力。
          </p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">
              100&nbsp;200&nbsp;2
          </p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">
            10&nbsp;20
          </p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">
            120&nbsp;150&nbsp;2
          </p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">14&nbsp;16</p>
        </div>
      </div>
      <div class="output-fourblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">
            300&nbsp;333&nbsp;1
          </p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">No</p>
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
