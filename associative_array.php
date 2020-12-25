<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>associative_array</title>
  </head>
  <body>
    <form action="associative_array.php" method="post">
      <input type="text" name="bot_names">
      <input type="submit">
    <?php
    $cgpa  = array('nithin' =>9.5 ,"staines"=> 9.4,"yashwanth"=>9.2,"bharath"=>8.3,"yukesh"=>8.53 );
    $cgpa ["nithin"]=9.6;
    cgpa:echo "$cgpa[nithin]<br>";
    count:echo count($cgpa);
    echo $cgpa [$_POST["bot_names"]];
     ?>
  </body>
    </html>
