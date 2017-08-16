<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

 $numeros = array (2,8,10,4,6);
 sort ($numeros);
              echo "<strong> <br> Los numeros pares entre 1 y 10 en forma ascendente son: <br> <br> </strong>";
         foreach ($numeros as $clave =>  $valor) {
              echo "[".$clave."] = ".$valor."\n <br>";

 }
     ?>

  </body>
</html>
