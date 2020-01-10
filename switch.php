<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estructura SWITCH en PHP</title>
</head>
<body>
    <?php
    
    $opcion = 2;
    switch($opcion){
        case '1':
            echo "Elegiste Sumar";
        break;
        case '2':
            echo "Elegiste Restar";
        break;
        case '3':
            echo "Elegiste Multiplicar";
        break;
        case '4':
            echo "Elegiste Dividir";
        break;
        default:
            echo "Operacion Invalida";
        break;
    }

    ?>
</body>
</html>