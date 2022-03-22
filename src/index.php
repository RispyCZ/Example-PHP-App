<?php
    if(isset($_COOKIE['navsteva']))
    {
      $stav=$_COOKIE['navsteva']+1;
      setcookie("navsteva",$stav,time()+60*60*24*365*10);
    }
    else
    {
      setcookie("navsteva",1,time()+60*60*24*365*10);
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>neviem</title>
  </head>
  <body>
  <?php
    if(isset($_COOKIE['navsteva'])) 
    {
        echo('Tuto stránku jste načetli '.$_COOKIE['navsteva'].'-krát.');
    }
    else
    {
        echo('Tuto stránku jste načetli 1-krát.');
    }
  ?>
  </body>
</html>
