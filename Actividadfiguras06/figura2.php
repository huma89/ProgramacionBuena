<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura 2</title>
  </head>
  <body>
    <?php
    //Imprimo filas
    for ( $contador = 1; $contador <= 5; $contador++ ) {

      //Imprimo columnas
      for ( $repetidor = 1; $repetidor <= 5; $repetidor++) {
        echo '*';
      }

      echo '<br/>';
    }
    ?>
  </body>
</html>
