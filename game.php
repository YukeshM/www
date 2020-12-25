<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>game</title>
  </head>
  <body>
    <form action="game.php" method="get">
      color:<input type="text" name="color"><br>
      plural noun:<input type="text" name="plural noun"><br>
      celebrity:<input type="text" name="celebrity"><br>
  <input type="submit">
  </form>
  <?php
  $color = $_GET["color"];
  $pluralnoun = $_GET["plural noun"];
  $celebrity = $_GET["celebrity"];
  echo "favourite color is $color.<br>";
  echo "$pluralnoun are good.<br>";
  echo "i want to meet $celebrity."
   ?>

  </body>
  </html>
