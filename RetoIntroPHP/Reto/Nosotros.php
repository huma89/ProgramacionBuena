<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nosotros</title>
  </head>
  <body>
    <?php
      $pagina = 3;
      if ($pagina == 1) {
        echo '<h2>Estas en la pagina del Index parguelita</h2>';
      } elseif ($pagina == 2) {
        echo '<h2>Estas en la pagina del Contacto parguelita</h2>';
      } else {
        echo '<h2>Estas en la pagina de Nosotros parguelita</h2>';
      }
    ?>
  <a href="index.php">Index</a>
  </body>
</html>
