  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de Usuarios</title>
  </head>
  <body>
    <?php
  $conector = new mysqli("localhost" /*servidor*/, "root"/*usuario*/, ""/*contraseña*/, "juego"/*base de datos*/);
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      } else {
        $resultado = $conector->query("SELECT * FROM usuario");

        foreach ($resultado as $fila) {
          echo $fila["id"] . " " . $fila['nombre'] . $fila['apellidos'] . " " . $fila['edad'] . $fila['curso'] . " " . $fila["puntuacion"] . " " . $fila['correo'] ."<br>";
        }
      }
    ?>
  </body>
</html>

//Poniendo una URL como esta hago la prueba: http://localhost/DAW/Programacion/php/pruebasegeval/muestrausuario.php?usuario=2&search=search
