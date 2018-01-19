<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura países</title>
    <link rel="stylesheet" href="css/reto.css">
  </head>
  <body>

    <?php
    $conector = new mysqli("localhost", "root", "", "world");
    if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    } else {
      $resultado = $conector->query("SELECT Name, Continent, SurfaceArea FROM country WHERE Continent='South America' ORDER BY SurfaceArea DESC");
    ?>

    <table>

    <?php
    foreach ($resultado as $fila) {
      echo  "<tr>" ."<td>" .$fila['Name'] ."</td>" . " " ."<td>" .$fila['Continent']. "</td>" ." " . "<td>" .$fila['SurfaceArea'] ."</td>" . "</tr>" ."<br>";
    }
    ?>

    <h1>Países de Sur América</h1>

    <?php
    }
    ?>

    </table>
  </body>
</html>
