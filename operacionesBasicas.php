<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operaciones Basicas en PHP</title>
</head>
<body>
<fieldset>
    <legend>Operaciones Matematicas</legend>
    <form action="#" method="POST">
        <label for="n1">Primer Numero</label>
        <input type="number" name="n1" id="n1">
        <br>
        <br>
        <label for="n2">Segundo Numero</label>
        <input type="number" name="n2" id="n2">
        <br>
        <br>
        <label for="Operaciones">Operaciones Aritmeticas</label>
        <select name="operaciones" id="opr">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="division">Division</option>
        </select>
        <br>
        <input type="submit" name="enviar" value="Calcular">
    </form>
</fieldset>
<h1>Resultado</h1>
<?php

  if(isset($_POST['enviar'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $opc = $_POST['operaciones'];
      switch($opc){
          case 'sumar':
            $resultado = $n1 + $n2;
            echo "La suma ".$n1."+".$n2."=".$resultado;
          break;
          case 'restar':
            $resultado = $n1 - $n2;
            echo "La Resta ".$n1."-".$n2."=".$resultado;
          break;
          case 'multiplicar':
            $resultado = $n1 * $n2;
            echo "La Multiplicacion ".$n1."*".$n2."=".$resultado;
            break;
          case 'dividir':
            $resultado = $n1 / $n2;
            echo "La Divison ".$n1."/".$n2."=".$resultado;
            break;
          default:
            break;
      }
  }  
?>
</body>
</html>

