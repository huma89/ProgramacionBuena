<?php
  if (isset($_GET["usuario"])) {
  $conector = new mysqli("localhost" /*servidor*/, "root"/*usuario*/, ""/*contraseña*/, "juego"/*base de datos*/);
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    } else {
      $usuario = $_GET["usuario"];
      $consulta = "SELECT * FROM usuario WHERE id = '$usuario'";
      $resultado = $conector->query($consulta);
    }
    $conector->close();
  }

  if (isset($_GET["usuario"])) {
    foreach ($resultado as $key => $fila) {
      echo $fila["id"] . " " . $fila['nombre'] . $fila['apellidos'] . " " . $fila['edad'] . $fila['curso'] . " " . $fila["puntuacion"] . " " . $fila['correo'] ."<br>";
    }
  }

?>
