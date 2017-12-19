<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilosMenu.css">
  </head>
  <body>
    <nav>
      <ul>
        <?php
          $pagina = 2;
          if ($pagina == 1) {
            echo '<li> <a href="index.php" class="active">Index</a> </li>';
          } else {
            echo '<li> <a href="index.php">Index</a> </li>';
          }
          if ($pagina == 2) {
            echo '<li> <a href="contacto.php" class="active">Contact</a> </li>';
          } else {
            echo '<li> <a href="contacto.php">Contact</a> </li>';
          }
          if ($pagina == 3) {
            echo '<li> <a href="sobreNosotros.php" class="active">Sobre Nosotros</a> </li>';
          } else {
            echo '<li> <a href="sobreNosotros.php">Sobre Nosotros</a> </li>';
          }
        ?>
      </ul>
    </nav>
  </body>
</html>
