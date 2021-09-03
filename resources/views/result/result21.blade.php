<!DOCTYPE hmtl>
<html lang="ja">
    <head>
      <meta charset="utf-8">
      <title>提出結果</title>
      <link href="css/result-submit.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <main>
	<div class="body-ul">
	<div class="header-logo">提出結果</div>
           <div class="body-one">
               <ul>
                 <li><a href="#"></a></li>
                 <li><a href="#"></a></li>
                 <li><a href="#"></a></li>
                 <li><a href="#"></a></li>
               </ul>
            </div>
         </div>
	    <div class="submit-box">
		<?php
		     $content = $_POST["name"];
		     $path = "./";
		     if(is_writable($path) && $_POST['select'] == 'javascript'){
			     $file_handle = fopen($path."hello.js","w");
			     fwrite($file_handle,$content);
			     fclose($file_handle);
			     $cmd1 = "g++ kill_process2.c";system($cmd1,$arr);
			     $cmd2 = "bash sh/input21/input21-one.sh|./a.out ";
           $output=null;
			     $retval = null;
			     $start = microtime(true);
			     $check = exec($cmd2,$output,$retval);

			     $end = microtime(true);
			     $time = $end -$start;
			     $time *= 1000;
			     round($time);
		     }elseif(is_writable($path) && $_POST['select'] == 'python'){
			     $file_handle=fopen($path."hello.py","w");
			     fwrite($file_handle,$content);

			     fclose($file_handle);

			     $cmd1 = "g++ kill_process.c";system($cmd1,$arr);
			     $cmd2 = "bash sh/input21/input21-one.sh|./a.out ";
			     $output=null;
			     $retval = null;
			     $start = microtime(true);
			     $check = exec($cmd2,$output,$retval);

			     $end = microtime(true);
			     $time = $end -$start;
			     $time *= 1000;
			     round($time);
		     }elseif(is_writable($path) && $_POST['select'] == 'ruby'){
           $file_handle=fopen($path."hello.rb","w");
			     fwrite($file_handle,$content);

			     fclose($file_handle);

			     $cmd1 = "g++ kill_process1.c";system($cmd1,$arr);
			     $cmd2 = "bash sh/input21/input21-one.sh|./a.out ";
			     $output=null;
			     $retval = null;
			     $start = microtime(true);
			     $check = exec($cmd2,$output,$retval);

			     $end = microtime(true);
			     $time = $end -$start;
			     $time *= 1000;

         }else{
           $arr = 1;
           $time = 0;

         }

		?>
    <?php
if($arr ==1 ){

$decision = "CE";
goto ex;
}elseif($arr ==0 && $check == "" && $time>2000){

      $decision = "TLE";
goto ex;
}elseif($arr ==0 && $check == "" && $time<2000){

      $decision = "CE";
      goto ex;
}elseif($output[0] == 2){

$decision = "AC";

}else{

$decision = "WA";
}
ex:

?>
<?php $problem = "2-1:コマンド引数"; ?>
<table>
<tr>
    <th>提出日時</th> <th>問題</th> <th>言語</th> <th>結果</th> <th>実行時間</th> <th> </th>
</tr>
<tr>
<td><?php  date_default_timezone_set('Asia/Tokyo'); echo date("Y-m-d H:i:s"); ?> </td> <td><?php echo $problem ?></td> <td><?php echo $_POST["select"]; ?> </td>

<?php if($decision=="AC"){ ?>
<td bgcolor="#c0ffc0"><?php echo $decision ?></td>
<?php }elseif($decision=="CE"){ ?>
<td bgcolor="#ffffc0"><?php echo $decision ?></td>
<?php  }elseif($decision=="WA"){ ?>
<td bgcolor="#FFD699"><?php echo $decision ?></td>
<?php }else{?>
<td bgcolor="#EDA46C"><?php echo $decision ?></td>
<?php } ?>
  <td><?php echo round($time) ?>ms <td><a href="#">詳細</a> </td>
</tr>
<?php $i =0; ?>

  @foreach($data as $d)
  <?php if($i<=8){ ?>
      <tr>
    <td>{{$d->created_at}}</td> <td>{{$d->problem}}</td><td>{{$d->language}}</td>
    <?php if($d->decision=="AC"){ ?>
    <td bgcolor="#c0ffc0">{{$d->decision}}</td>
  <?php }elseif($d->decision=="CE"){ ?>
    <td bgcolor="#ffffc0">{{$d->decision}}</td>
 <?php  }elseif($d->decision=="WA"){ ?>
   <td bgcolor="#FFD699">{{$d->decision}}</td>
 <?php }else{?>
   <td bgcolor="#EDA46C">{{$d->decision}}</td>
 <?php } ?>

    <td>{{$d->elapsed_time}}ms</td><td><a href="#">詳細</a></td>

      </tr>
  <?php  $i++;  } ?>

  @endforeach

</table>


<div class="main-footer">
  <?php
  $name = Auth::user()->name;
  $email = Auth::user()->email;
  $time = round($time)
   ?>
  <form action="{{ url('/problems')}}" method="post">
    {{ csrf_field() }}


    <input type="hidden" name='name' value='<?= $name ?>'>
    <input type="hidden" name='email' value='<?= date("Y-m-d H:i:s")?>'>
    <input type="hidden" name='password' value='<?= $email ?>'>
    <input type="hidden" name='elapsed_time' value='<?= $time ?>'>
    <input type="hidden" name='decision' value='<?= $decision?>'>
    <input type="hidden" name='language' value='<?= $_POST['select']?>'>
　　<input type="hidden" name='problem' value='<?= $problem?>'>
      <button type="submit" name="message">保存</button>
  </form>
</div>
</div>

</main>
<div class="footer">

</div>

</body>
</html>
