<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $nombres= array('Mirna','Paula','Jose','Sebastian','Carlos');
    $Contar= count($nombres);
    echo "<br> El numero de elementos que hay dentro del vector es: $Contar <br> <br> <hr>";

    echo "<strong> Lista no ordenada <br> <br> </strong>" ;
    shuffle ($nombres);
                 foreach ($nombres as $nombre) {
                      echo "$nombre <br>";

    }

     ?>

  </body>
</html>
