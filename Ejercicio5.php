<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ingrese 10 numeros </h1>
    <form method="post">
      Numero1: <br> <input name="numero1"  type="number" /></br>
      Numero2: <br> <input name="numero2"  type="number" /></br>
      Numero3: <br> <input name="numero3"  type="number" /></br>
      Numero4: <br> <input name="numero4"  type="number" /></br>
      Numero5: <br> <input name="numero5"  type="number" /></br>
      Numero6: <br> <input name="numero6"  type="number" /></br>
      Numero7: <br> <input name="numero7"  type="number" /></br>
      Numero8: <br> <input name="numero8"  type="number" /></br>
      Numero9: <br> <input name="numero9"  type="number" /></br>
      Numero10: <br> <input name="numero10"  type="number" /></br> <br>
      <input name="enviar" type="submit" value="Calcular"/><br> <hr>
    </form>

    <?php
        if ($_POST) {
        $numero1= $_POST['numero1'];
        $numero2= $_POST['numero2'];
        $numero3= $_POST['numero3'];
        $numero4= $_POST['numero4'];
        $numero5= $_POST['numero5'];
        $numero6= $_POST['numero6'];
        $numero7= $_POST['numero7'];
        $numero8= $_POST['numero8'];
        $numero9= $_POST['numero9'];
        $numero10= $_POST['numero10'];

        $Datos = array($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7,$numero8,$numero9,$numero10);
        $suma = $Datos[0]+$Datos[1]+$Datos[4]+$Datos[3]+$Datos[4]+$Datos[5]+$Datos[6]+$Datos[7]+$Datos[8]+$Datos[9];
        $resta = $Datos[0]-$Datos[1]-$Datos[4]-$Datos[3]-$Datos[4]-$Datos[5]-$Datos[6]-$Datos[7]-$Datos[8]-$Datos[9];
        $multiplicacion = $Datos[0]*$Datos[1]*$Datos[4]*$Datos[3]*$Datos[4]*$Datos[5]*$Datos[6]*$Datos[7]*$Datos[8]*$Datos[9];
        $division = $Datos[0]/$Datos[1]/$Datos[4]/$Datos[3]/$Datos[4]/$Datos[5]/$Datos[6]/$Datos[7]/$Datos[8]/$Datos[9];

        echo "La suma de todos los numeros es: $suma <br>";
        echo "La resta de todos los numeros es: $resta <br>";
        echo "La multiplicacion de todos los numeros es: $multiplicacion <br>";
        echo "La division de todos los numeros es: $division <br>";
        }
     ?>

  </body>
</html>
