<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion de empleados

$aEmpleados = array();
$aEmpleados[] = array(
    "dni" => "33.300.123",
    "nombre" => "David Garcia",
    "bruto" => 85000.30,

);

$aEmpleados[] = array(
    "dni" => "40.874.456",
    "nombre" => "Ana Del Valle",
    "bruto" => 90000,

);

$aEmpleados[] = array(
    "dni" => "67.567.565",
    "nombre" => "Andres Perez",
    "bruto" => 100000,

);

$aEmpleados[] = array(
    "dni" => "75.744.545",
    "nombre" => "Victoria Luz",
    "bruto" => 70000,

);

function calcularNeto($bruto) {
    return $bruto - ($bruto * 0.17);
}


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
                <h1>Listado de Empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Bruto</th>


                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($aEmpleados); $i++) { ?>
                            <tr>
                                <td><?php echo $aEmpleados[$i]["dni"]; ?></td>
                                <td><?php echo mb_strtoupper($aEmpleados[$i]["nombre"]); ?></td>
                                <td>$<?php echo number_format(calcularNeto($aEmpleados[$i]["bruto"]), 2, ",", "."); ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Cantidad de empleados activos: <?php echo count($aEmpleados); ?></p>
            </div>
        </div>

    </main>
</body>

</html>