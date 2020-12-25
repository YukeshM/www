<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>url_parameter</title>
  </head>
  <body>
    <form action="url_parameter.php" method="get">
      Name:<input type="text" name="Name"><br>
      <input type="submit">
    </form>
    <br><br>
    <?php
    echo "$_GET[Name]";?>
  </body>
  </html>
