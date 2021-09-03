<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>問題一覧</title>
    <link href="css/profile.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="body-ul">
      <div class="header">
        <div class="header-logo">成績</div>
        <div class="header-list">
          <ul>
            <li><a href="/problem">問題一覧</a></li>
            <li><a href="/home">ホーム</a></li>

          </ul>
        </div>
      </div>
      <div class="body-main">
        <div class="result-main">
          <?php $count = 0 ?>
          @foreach($data as $d)
            <p>{{$d->problem}}</p>
            <?php $count++; ?>
          @endforeach


        </div>

      </div>

     <div class="footer">
       <?php if($count ==0){
         echo "まだ完了しているものがありません";
       } ?>
       <?php if($count != 0){echo $count.'/23';} ?>
     </div>
    </div>
  </body>
</html>
