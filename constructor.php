<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>constructors</title>
  </head>
  <body>
    <?php
    class phone {
      var $brand;
      var $price;
      var $ram;
      var $internalmemory;
      var $processor;
      var $battery;

      function __construct($abrand,$aprice,$aram,$ainternalmemory,$aprocessor,$abattery){
    //    echo "new phone launched.<br>";


    
    //upcoming code is for to store the many phone details without writing each object code for the phones
      $this->brand = $abrand;
      $this->price = $aprice;
      $this->ram = $aram;
      $this->internalmemory = $ainternalmemory;
      $this->processor = $aprocessor;
      $this->battery = $abattery;
      }
    }
    $phone1 = new phone("vivo",15000,"4gb","64gb","mediatek","3250mah");
  /*  $phone1->brand = "vivo";
    $phone1->price = 15000;
    $phone1->ram = "4gb";
    $phone1->internalmemory = "64gb";         instead of writing a block of code we can simply construct a function and we can reduce the codes.
    $phone1->processor = "mediatek";
    $phone1->battery = "3250mah";      */

    $phone2 = new phone("redmi",15000,"4gb","64gb","snapdragon","4000mah");
  /*  $phone2->brand = "redmi";
    $phone2->price = 15000;
    $phone2->ram = "4gb";
    $phone2->internalmemory = "64gb";
    $phone2->processor = "snapdragon";
    $phone2->battery = "4000mah";     */

    echo $phone1->brand;

    ?>
  </body>
  </html>
