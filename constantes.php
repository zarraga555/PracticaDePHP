<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constantes con PHP</title>
</head>
<body>
    <?php
  
    //Mayormene se escibre en Mayusculas o _
    define("SALUDO","Bienvenidos al curso de PHP");
    echo SALUDO.'<BR>';

    define("DATO", 2);
    echo "Tipo de numero de entero: ".DATO;

    ?>
</body>
</html>