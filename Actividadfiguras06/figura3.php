<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura 3</title>
  </head>
  <body>
      <?php
          for ( $contador = 1; $contador <= 7; $contador ++) {

            for ($i=0; $i < $contador ; $i++) {
              echo '*';
            }
            
            echo '<br/>';
          }
      ?>
  </body>
</html>
