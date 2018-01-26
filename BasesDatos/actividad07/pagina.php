<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina</title>
    <link rel="stylesheet" href="css/Pagina.css">
  </head>
  <body>
    <a href="pagina2.php">Pagina 2</a><br>
    <a href="pagina3.php">Pagina 3</a><br>
    <?php
      $conector = new mysqli("localhost" /*servidor*/, "root"/*usuario*/, ""/*contraseña*/, "world"/*base de datos*/);
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      } else {
        $resultado = $conector->query("SELECT Name, SurfaceArea FROM country ORDER BY SurfaceArea ASC ");

        foreach ($resultado as $fila) {
          echo $fila['Name'] . " " . $fila["SurfaceArea"] . "<br>";
        }
      }
    ?>
  </body>
</html>
