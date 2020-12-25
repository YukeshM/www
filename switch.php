<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>switchey</title>
  </head>
  <body>
    <form action="switch.php" method="post">
      what's your grade?
      <input type="text" name="grade">
      <input type="submit">
    </form>
    <?php
    $grade = $_POST["grade"];
    echo "$grade";
    echo "<br>";
    switch ($grade) {
      case "A":
        // code...
        echo "mark is between 90-100";
        break;
        case 'B':
          echo "mark is between 80-90";
          break;
            case "C":
              echo "mark is between 70-80";
              break;
              case "D":
              echo "mark is between 60-70";
              break;
                case "E":
                echo "mark is between 50-60";
                break;

      default:
        // code...
        echo "enter a valid grade.";
        break;
    }
     ?>
  </body>
  </html>
