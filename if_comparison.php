<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>if-comparison</title>
  </head>
  <body>
maximum number:  <?php
//find maximum of 2 number
//  function getmax($num1,$num2){
  //  if($num1 > $num2)
//    {
      //echo "$num1 is greater than $num2"; this line of code is for to print but in function this code is not necessary.
//      return $num1;
    //}
      //else {
      //echo "$num2 is greater than $num1";
//      return $num2;
//    }
  //}
  //find maximum of 3 numbers
    function getmax($num1,$num2,$num3)
    {
      if($num1 >= $num2 && $num1 >= $num3){
        return $num1;
      }
      elseif ($num2 >= $num1 && $num2 >= $num3){
        return $num2;
      }
      else {
        return $num3;
      }
    }

    echo getmax(9999,4500,1000);
   ?>
  </body>
  </html>
