<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo "PHP addignment by: \"Dennis Sandmann\" (fix PHP syntax errors)" ?> </title>
  </head>

  <body>
      <?php
        $ages = [10,50,39,40,67,99,7,2,10,88];
        $sum = 0;

        function getAverageAge($ages) {
          for($i=0; $i<count($ages); $i++) {
            $sum += $ages[$i];
          }

          return $sum / count($ages) ;
        }

        echo getAverageAge($ages);
        ?>
  </body>
</html>
