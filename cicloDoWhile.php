<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estructura Ciclo Do WHILE en PHP</title>
</head>
<body>
    <?php

    $suma = 0;
    $contador = 0;
    do{
        $suma = $suma + $contador;
        $contador++;
    }while($contador <= 100);{
        echo "la suma de los primeros 100 numeros es: " .$suma;
    }

    ?>
</body>
</html>