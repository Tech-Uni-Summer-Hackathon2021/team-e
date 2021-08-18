<!DOCTYPE html>
<html lang='ja'>
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
           $cmd1 = "g++ kill_process0.c";system($cmd1,$arr);
           $cmd2 = "./a.out";
           system($cmd2,$arr1);
           if($arr=0){
              echo "AC";
           }else{
              echo "CE";
           }
        }elseif(is_writable($path) && $_POST['select'] == 'python'){
           $file_handle = fopen($path."hello.py","w");
           fwrite($file_handle,$content);

           fclose($file_handle);
           $start = microtime(true);
           $cmd1 = "g++ kill_process.c";system($cmd1,$arr);
           $cmd2 = "echo 30| ./a.out";
           $output = null;
           $retval = null;
           $check = exec($cmd2,$output,$retval);
           $end = microtime(true);

           if($arr ==0 && $end-$start<2 && $check != ""){
               echo "AC";
               echo $end-$start;
           }else{
               echo "CE";
               echo $end-$start;

           }
         }else{echo "ai";}
        $end = microtime(true);
        ?>

      <div class="header">
      <div class="header-logo"></div>
      <div class="header-ul">
      </div>
    </div>
    <div calss="main">

    </div>
