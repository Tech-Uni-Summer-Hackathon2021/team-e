


<!DOCTYPE html>
<html lang="jp" >
  <head>
    <meta charset="utf-8">
    <title>top</title>
  </head>
  <body>
    <h1>コンパイル結果</h1>
    <?php

    echo $_POST["select"];
    $content = $_POST["name"];
    $path = "./";
    if(is_writable($path) && $_POST['select'] == 'C(g++)'){
      $file_handle = fopen($path."hello.cpp","w");
      fwrite($file_handle,$content);

      fclose($file_handle);
      $cmd1 = "g++ hello.cpp";system($cmd1,$arr);
      $start = microtime(true);
      $great = 58;
      $cmd2 = "echo $great 10 |a.exe ";
      $start = microtime(true);
      system($cmd2);
      $end = microtime(true);
      if($arr==0){
        echo "AC";
        echo $end-$start;
      }else{
        echo "CE";
        echo $end-$start;
      }
    }elseif(is_writable($path) && $_POST['select'] == 'python'){
      $file_handle = fopen($path."hello.py","w");
      fwrite($file_handle,$content);

      fclose($file_handle);
      $start = microtime(true);
      while($start-microtime(true)<2000){
        $cmd = "echo |hello.py";system($cmd,$arr);
        $end = microtime(true);
        break;
      }
      if($arr==0){
        echo "AC";
        echo $end-$start;
      }else{
        echo "CE";
        echo $end-$start;
      }
    }else{echo "ai";}
     ?>


  </body>
</html>
