
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="../../public/css/hello.css" rel="stylesheet" type="text/css">
    <link href="../../public/css/styles.css" rel="stylesheet">
  </head>

  <body>
    <header class="page-header">
      <h1><a href="hello.blade.php"><img class="logo" src="../images/logo.png"></a></h1>
      <nav>
        <ul class="main-nav">
          <li><a>問題一覧</a></li>
          <li><a href="top.php">ログアウト</a></li>
        </ul>
      </nav>
    </header>

    <main class="main-contents">
      <div class="question-contents">
        <p>問題タイトル</p>

        <form action="{{ url('/top')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
            $language = array("python","C(g++)","javascript");
           ?>
          <p>言語</p>
          <select  name="select">
            <option value="未選択">選択してください</option>
            <?php
              foreach($language as $lang){
                echo "<option  value='{$lang}'>{$lang}</option>";
              }
            ?>
          </select>
          <p>コンパイル</p>
          <textarea name="name"  rows="8" cols="80"></textarea>
        </div>
        <div class="submit-button">
          <button type="submit" name="message">送信</button>
        </div>
        </form>
      </div>

      <nav>
        <ul class="page-icon">
          <li><i class="fas fa-arrow-circle-left page-left"></i></li>
          <li><i class="fas fa-arrow-circle-right page-right"></i></li>
        </ul>
      </nav>
      
    </main>
      
    <div class="footer">

    </div>

  </body>
</html>
