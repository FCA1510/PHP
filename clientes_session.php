<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(isset($_SESSION["listadoClientes"])){
    //Si existe la variable de session listadoClientes asigno su contenido a aClientes
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}
    




if ($_POST) {
    //Si hace click en Enviar entonces:

    //Asignamos en variables los datos que vienen del formulario
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

    //Creamos un array que contenga el listado de clientes
    $aClientes[] = array(
        "nombre" => $nombre,
        "dni" => $dni,
        "telefono" => $telefono,
        "edad" => $edad,
    );
    //Actualiza el contenido de variable de session
    $_SESSION["listadoClientes"] = $aClientes;

    //Si hace click en Eliminiar:
    //session:destroy();
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Listado de Clientes</h1>
            </div>
            <div class="row">
                <div class="col-4">
                    <form action="" method="POST">
                        <div class="pb-3">
                            <label for="txtNombre">Nombre:</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                        </div>
                        <div class="pb-3">
                            <label for="txtNombre">DNI:</label>
                            <input type="text" name="txtDni" id="txtDni" class="form-control">
                        </div>
                        <div class="pb-3">
                            <label for="txtNombre">Teléfono:</label>
                            <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                        </div>
                        <div class="pb-3">
                            <label for="txtNombre">Edad:</label>
                            <input type="number" name="txtEdad" id="txtEdad" class="form-control">
                        </div>
                        <div class="pb-3">
                            <div class="pb-3">
                                <button type="submit" class="btn btn-primary">
                                    ENVIAR
                                </button>
                                <button type="submit" class="btn btn-danger">
                                    ELIMINAR
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-8 pb-4">
                    <table class="table border shadow table-hover">
                        <thead>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                        </thead>
                        <tbody>
                            <?php foreach ($aClientes as $cliente) { ?>
                                <tr>
                                    <td><?php echo $cliente["nombre"]; ?> </td>
                                    <td><?php echo $cliente["dni"]; ?> </td>
                                    <td><?php echo $cliente["telefono"]; ?> </td>
                                    <td><?php echo $cliente["edad"]; ?> </td>
                                </tr>
                            <?php } ?>
                        </tbody>



                    </table>
                </div>
            </div>

        </div>
    </main>

</body>

</html>