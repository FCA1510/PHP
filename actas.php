<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Definicion
function promediar($aNotas)
{
    $sumaTotal = 0;
    foreach ($aNotas as $nota) {
        $sumaTotal = $sumaTotal + $nota;
    }
    $promedio = $sumaTotal / count($aNotas);
    return $promedio;
}


$aAlumnos = array();
$aAlumnos[] = array(
    "alumno" => "Juan Perez",
    "notas" => array(7, 8),


);

$aAlumnos[] = array(
    "alumno" => "Ana Valle",
    "notas" => array(5, 7),

);

$aAlumnos[] = array(
    "alumno" => "Gonzalo Roldan",
    "notas" => array(6, 9),

);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Actas</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>
                        <!---cuerpo de la tabla--->
                        <tr>

                            <th>Alumno:</th>
                            <th>Nota 1:</th>
                            <th>Nota 2:</th>
                            <th>Promedio:</th>
                        </tr>

                    </thead>
                    <tbody>

                        <?php 
                        $promedioCurso = 0;
                        $suma = 0;
                        foreach ($aAlumnos as $alumno){
                            $promedio = promediar($alumno["notas"]);
                            $suma = $suma + $promedio;
                          ?>
                            <tr>
                                <td><?php echo $alumno["alumno"]; ?></td>
                                <td><?php echo $alumno["notas"][0]; ?></td>
                                <td><?php echo $alumno["notas"][1]; ?></td>
                                <td><?php echo promediar($alumno["notas"]); ?></td>
                            </tr>
                        <?php } 
                        $promedioCurso = $suma / count($aAlumnos);
                        ?>
                        

                    </tbody>
                </table>

            </div>
            <div class="row">
                <div class="col-12">
                    <p>Promedio de la cursada: <?php echo number_format($promedioCurso, 2 , ",", "."); ?></p>
                </div>
            </div>
        </div>

    </main>

</body>

</html>