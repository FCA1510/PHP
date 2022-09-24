<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion de pacientes
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);

$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
);

$aPacientes[] = array(
    "dni" => "30.464.323",
    "nombre" => "Federico Coronel",
    "edad" => 38,
    "peso" => 120,
);

$aPacientes[] = array(
    "dni" => "35.526.889",
    "nombre" => "Guillermo Valenti",
    "edad" => 35,
    "peso" => 81.50,
);

$aPacientes[] = array(
    "dni" => "29.985.666",
    "nombre" => "Romina Coronel",
    "edad" => 40,
    "peso" => 89,
);

$aPacientes[] = array(
    "dni" => "3.536.222",
    "nombre" => "Alberto Conti",
    "edad" => 45,
    "peso" => 96,
);
?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                                                
                    </thead>
                    <tbody>
                        <?php for($i=0; $i < count($aPacientes); $i++) { ?>
                        <tr>
                            <td><?php echo $aPacientes[$i]["dni"]; ?></td>
                            <td><?php echo $aPacientes[$i]["nombre"]; ?></td>
                            <td><?php echo $aPacientes[$i]["edad"]; ?></td>
                            <td><?php echo $aPacientes[$i]["peso"]; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>