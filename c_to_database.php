<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myfirstapp";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT user_id, name, email,password FROM userinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

     echo  $row["user_id"];
     echo  $row["name"];
     echo  $row["email"];
      echo  $row["password"];
      echo "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
