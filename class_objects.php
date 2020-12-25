<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>class_obj</title>
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
    }
    $phone1 = new phone;
    $phone1->brand = "vivo";
    $phone1->price = 15000;
    $phone1->ram = "4gb";
    $phone1->internalmemory = "64gb";
    $phone1->processor = "mediatek";
    $phone1->battery = "3250mah";

    $phone2 = new phone;
    $phone2->brand = "redmi";
    $phone2->price = 15000;
    $phone2->ram = "4gb";
    $phone2->internalmemory = "64gb";
    $phone2->processor = "snapdragon";
    $phone2->battery = "4000mah";

    echo $phone2->brand;
    ?>
  </body>
  </html>
