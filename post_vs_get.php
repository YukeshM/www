<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>post-vs-get</title>
  </head>
  <body>
    <form action="post_vs_get.php" method="post">
      password:<input type="password" name="password"><br>
      <input type="submit">
    </form><br><br>
      password:<?php echo "$_POST[password]"; ?>
  </body>
  </html>
