<?php
//2-Definimos el uso horario 
date_default_timezone_set("America/Argentina/Buenos_Aires");

//3-Definimos las variables en un array para que pase seleccionando de a uno. Peliculas[0] va a ser Hamlet y asi sucesivamente.
$nombre = "Federico Coronel";
$edad = 39;
$peliculas = array("Hamlet", "Titanic", "Shrek");

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Ficha Personal</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Ficha Personal</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table border table-hover">
                        <tbody>
                            <tr>
                                <th>Fecha:</th>
                                <td><?php echo date("d/m/Y"); ?>
                            </tr>
                            <tr>
                                <th>Nombre y Apellido:</th>
                                <td><?php echo $nombre; ?></td>
                            </tr>
                            <tr>
                                <th>Edad:</th>
                                <td><?php echo $edad; ?></td>
                            </tr>
                            <tr>
                                <th>Peliculas favoritas:</th>
                                <td><?php
                                    echo $peliculas[0] . "</br>";
                                    echo $peliculas[1] . "<br>";
                                    echo $peliculas[2];
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>
</body>

</html>