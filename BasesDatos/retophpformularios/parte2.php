<?php
  if (isset($_POST["continente"])) {
    $conector = new mysqli("localhost" /*servidor*/, "root"/*usuario*/, ""/*contraseña*/, "world"/*base de datos*/);
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    } else {
      $continente = $_POST["continente"];//En las comillas del $_GET se pone lo que he puesto en el input
      $superficie = $_POST["superficie"];
      $consulta = "SELECT * FROM country WHERE Continent = '$continente' AND SurfaceArea > $superficie";
      $resultado = $conector->query($consulta);
    }
    $conector->close();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parte 2</title>
    <link rel="stylesheet" href="css/parte2.css">
  </head>
  <body>
    <table>
      <?php
        if (isset($_POST["continente"])) {
          foreach ($resultado as $key => $fila) {
            echo "<tr><td>" . 'Código: ' . $fila['Code'] . "</td><td>" . ' Nombre: ' . $fila['Name'] . "</td><td>" . ' Continente: ' . $fila['Continent'] . "</td><td>" . 'Región: ' . $fila['Region'] . "</td><td>" . 'Superficie: ' . $fila['SurfaceArea'] . "</td><td>" .  ' Año Independencia: ' . $fila['IndepYear'] . "</td></tr>";
          }
        }
      ?>
    </table>
  </body>
</html>
