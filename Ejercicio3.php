<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

 $numeros = array (6,7,8,9,10,1,2,3,4,5);
 sort ($numeros);
              echo "<strong> <br> Los numeros en forma ascendente son: <br> <br> </strong>";
         foreach ($numeros as $clave =>  $valor) {
              echo "[".$clave."] = ".$valor."\n <br>";

 }

     ?>

  </body>
</html>
