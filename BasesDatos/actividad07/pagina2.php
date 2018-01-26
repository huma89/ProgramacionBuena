<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina 2</title>
  </head>
  <body>
    <a href="pagina.php">Pagina</a><br>
    <a href="pagina3.php">Pagina 3</a><br>
    <?php
      $conector = new mysqli("localhost" /*servidor*/, "root"/*usuario*/, ""/*contraseña*/, "world"/*base de datos*/);
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      } else {
        $resContinentes = $conector->query("SELECT Continent FROM country GROUP BY Continent");

        foreach ($resContinentes as $fila) {
          echo "<h2>Continente " . $fila['Continent'] . "</h2>";
          $query = "SELECT Name FROM country WHERE Continent='". $fila['Continent']."'";
          
          $resPaises =  $conector->query( $query );
          foreach ( $resPaises as $key => $pais) {
            echo $pais['Name'] . "<br>";
          }
        }
      }


      $array = array(0 => "Hola");
    ?>
  </body>
</html>
