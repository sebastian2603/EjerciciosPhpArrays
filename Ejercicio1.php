<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <h1>Ingrese sus datos</h1>
      Nombre: <br> <input name="nombre"  type="text" /></br>
      Direccion: <br> <input name="direccion"  type="text" /></br>
      Telefeno: <br> <input name="telefono"  type="number" /></br> <br>
      <input name="enviar" type="submit" value="Procesar"/><br> <hr>
    </form>

    <?php

    $nombre= $_POST['nombre'];
    $direccion= $_POST['direccion'];
    $telefono= $_POST['telefono'];
    $Datos = array($nombre, $direccion , $telefono );

       echo "Su nombre es: $Datos[0] <br> ";
       echo "Su direccion es: $Datos[1] <br>";
       echo "y su telefono es: $Datos[2] <br>";

     ?>

  </body>
</html>
