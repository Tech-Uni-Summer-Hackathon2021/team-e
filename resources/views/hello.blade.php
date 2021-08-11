
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">

    <title>hello</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="header">
      <div class="header-logo">Tech.Uni</div>
      <div class="header-ul">
        <ul>
          <li><a href="/top">ログアウト</a></li>
          <li>名前</li>
          <li>ホーム</li>
          <li>ランキング</li>
        </ul>

      </div>

    </div>
    <div class="main">

      <form action="{{ url('/top')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
            $language = array("python","C(g++)","javascript");
           ?>
          <select  name="select">
            <option value="未選択">選択してください</option>
            <?php
              foreach($language as $lang){
                echo "<option  value='{$lang}'>{$lang}</option>";
              }
            ?>
          </select>
          <p>コンパイル:</p>
          <textarea name="name"  rows="8" cols="80"></textarea>
        </div>
        <div class="main-button">
          <button type="submit" name="message">送信</button>
        </div>
      </form>
    </div>
    <div class="footer">

    </div>

  </body>
</html>
