<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>checkboxes</title>
  </head>
  <body>
    <form action="checkbox.php" method="post">
    apples:  <input type="checkbox" name="fruits[]" value="apples"><br>
    pomegranate: <input type="checkbox" name="fruits[]" value="pomegranate"><br>
       grapes:<input type="checkbox" name="fruits[]" value="grapes"><br>
        orange:<input type="checkbox" name="fruits[]" value="orange"><br>
        <input type="submit">
    </form>
    <?php
    $fruits = $_POST["fruits"];
    echo "$fruits[0]<br>";
    echo "$fruits[1]";
    ?>
  </body>
  </html>
