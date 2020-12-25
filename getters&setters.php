<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>getters_setters</title>
  </head>
  <body>
    <?php//see the youtube video for getter and setter.
    class movie{
      public $title;
      public $rating;

      function __construct($title,$rating){
        $this->title = $title;
        $this->rating = $rating;
      }
    }
    $avenger = new movie ("avengers",9);
    echo $avenger->rating;
    ?>
  </body>
  </html>
