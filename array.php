<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Unidimensionales en PHP</title>
</head>
<body>
    <?php

    $dia = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
    for($i =0; $i < count($dia); $i++){
        echo "Día " .$i. " = " .$dia[$i]. "<br>";
    }
    ?>
</body>
</html>