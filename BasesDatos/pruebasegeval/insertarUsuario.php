<?php
  if (isset($_POST["enviar"])) {
  $conector = new mysqli("localhost" /*servidor*/, "root"/*usuario*/, ""/*contraseña*/, "juego"/*base de datos*/);
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    }else {
      $nombre=$_POST["nombre"];
      $apellidos=$_POST["apellidos"];
      $edad=$_POST["edad"];
      $curso=$_POST["curso"];
      $correo=$_POST["correo"];

      $consulta= "INSERT INTO usuario (nombre, apellidos, edad, curso, correo) VALUES ('$nombre', '$apellidos', '$edad', '$curso', '$correo')";
      $resultado=$conector->query($consulta);
    }
    $conector->close();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Usuario</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label for="nombre">nombre</label>
      <input type="text" name="nombre" value=""><br><br>
      <label for="apellidos">apellidos</label>
      <input type="text" name="apellidos" value=""><br><br>
      <label for="edad">edad</label>
      <input type="text" name="edad" value=""><br><br>
      <label for="curso">curso</label>
      <input type="text" name="curso" value=""><br><br>
      <label for="correo">correo electronico</label>
      <input type="text" name="correo" value=""><br><br>
      <input type="submit" name="enviar" value="Enviar">
    </form>
  </body>
</html>
