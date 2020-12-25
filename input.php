<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>input</title>
  </head>
  <body>
    <form action="input.php" method="get">
      Name:<input type="text" name="username">
      <br>
      Age:<input type="number" name="age">
      <input type="submit">
    </form>                               <!--important the GET syntax should be in capital-->
    <br>
        your name is :  <?php echo $_GET["username"]?>
        <br>
        your age is : <?php echo $_GET ["age"]?>
    </body>
    </html>
