<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>connect_to_database</title>
  </head>
  <body>
    <?php
    $servername="localhost";
    $username="root";
    $password="root";
    //create connection
    $conn = new mysqli($servername,$username,$password);
    //check connection
    if($conn->connect_error )
    {
      die("connection failed:".$conn->connect_error);
    }
    else {
      echo "connected successfully.";
    }
     ?>
  </body>
</html>
