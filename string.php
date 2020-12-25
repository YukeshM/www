<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>strings</title>
  </head>
  <body>
    <?php
    $phrase = "hello everyone.";
    echo strtolower("$phrase<br>");
    echo strtoupper("$phrase<br>");
    echo strlen("$phrase");
    echo "<br>$phrase[0]";
    $phrase [0]="b";
    echo "<br>$phrase";
    $phrase ="<br>hello everyone";
    echo str_replace("hello","hi",$phrase);
    echo str_replace("he","hi",$phrase);
    echo "<br>";
    echo substr($phrase,5,4);

      ?>
      </body>
      </html>
