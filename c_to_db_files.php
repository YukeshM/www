<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>connect_to_database_server</title>
  </head>
  <body>
    <?php
    $servername="localhost";
    $username="root";
    $password="root";
    $database_name="giraffe";
    //create connection
    $conn = new mysqli($servername,$username,$password,$database_name);
    //check connection
    if($conn->connect_error )
    {
      die("connection failed:".$conn->connect_error);
    }

    //  echo "connected successfully.";
      $sql =  "SELECT id, name, gpa, major FROM student";
      $result=$conn->query($sql);

      if($result->num_rows > 0)
      {
      while ($row = $result->fetch_assoc()) {
        // code...
      //  echo "data".$row["id"]"-name:".$row["name"]."".$row["gpa"]."".$row["major"].<br>;
      echo $row["id"];
      echo $row["name"];
      echo $row["gpa"];
      echo $row["major"];
      }
      }
      else {
        echo "0 results.";
      }
      $conn->close();

     ?>
  </body>
</html>
