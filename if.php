<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>if</title>
  </head>
  <body>
    <?php
    $ismale=true;
    $istall=false;
    if ($ismale && $istall){
      echo "you are a tall male";
    }
    elseif ($ismale && !$istall) {
      // code...echo "string";
      echo "you are a short male";
    }
    elseif(!$ismale && $istall){
      echo "you are not male but you are tall";
    }
    else {
      echo "you are not male and not tall";
    }
    ?>
  </body>
  </html>
