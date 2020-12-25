<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>better_calculator</title>
  </head>
  <body>
    <form action="calculator-1.php" method="post"><!--step is for decimal numbers ex.=>0.001 states that 3 decimal points are allowed i.e,4.567,5.978-->
    firstnumber:<input type="number" step="0.001" name="num1"><br>
    operator:<input type="text" name="operator"><br>
    secondnumber:<input type="number" step="0.001" name="num2"><br>
    <input type="submit">
    </form>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    if($operator == "+"){
      echo $num1 + $num2;
    }
    elseif ($operator == "-"){
      echo $num1 - $num2;
    }
    elseif ($operator == "*") {
      echo $num1 * $num2;// code...
    }
    elseif ($operator == "/") {
      // code...
      echo $num1 / $num2;
    }
    elseif ($operator == "%") {
      // code...
      echo $num1 % $num2;
    }
    else {
      echo "enter a valid operator";
    }
     ?>
  </body>
  </html>
