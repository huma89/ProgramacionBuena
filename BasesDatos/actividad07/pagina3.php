<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina 3</title>
    <link rel="stylesheet" href="css/Pagina.css">
  </head>
  <body>
    <a href="pagina.php">Pagina</a><br>
    <a href="pagina2.php">Pagina 2</a><br>
    <table>
      <?php
        $conector = new mysqli("localhost" /*servidor*/, "root"/*usuario*/, ""/*contraseña*/, "world"/*base de datos*/);
        if ($conector->connect_errno) {
          echo "Fallo al conectar a MySQL: " . $conector->connect_error;
        } else {
          $resultado = $conector->query("SELECT Name, IndepYear FROM country");

          foreach ($resultado as $fila) {
            if ($fila["IndepYear"] == NULL) {
              echo "<td><tr>" . $fila['Name'] . "</tr><tr>" . ' NO INDEPENDIZADO' . "</tr></td><br>";
            }else{
              echo "<td><tr>" . $fila['Name'] . "</tr><tr>" . ' Fecha de independencia:' . $fila["IndepYear"] . "</tr></td><br>";
            }

          }
        }
      ?>
    </table>
  </body>
</html>
