<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Preguntar si existe el archivo
if(file_exists("archivo.txt")){   
    //Vamos a leerlo y almacenamos el contenido en jsonCLientes
    $jsonClientes = file_get_contents("archivo.txt");

    //Convertir jsonClientes en un array llamado aClientes
    $aClientes = json_decode($jsonClientes, true);
} else {   
//Si no existe el archivo
    // creamos un aClientes inicializado como un arrazy vacio
    $aClientes = array();

}


if ($_POST) {

    $documento = trim($_POST["txtDocumento"]);
    $nombre = trim($_POST["txtNombre"]);
    $telefono = trim($_POST["txtTelefono"]);
    $correo = trim($_POST["txtCorreo"]);

    $aClientes[] = array(
        "documento" => $documento,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "correo" => $correo
    );

    //Convertir el array de clientes a jsonClientes
    $jsonClientes = json_encode($aClientes);


    //Almacenar el string jsonClientes en el "archivo.txt"
    file_put_contents("archivo.txt", $jsonClientes);

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amb de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Registro de Clientes</h1>
            </div>
            <div class="row">
                <div class="col-4">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="pb-3">
                            <label for="txtDocumento">DNI:*</label>
                            <input type="text" name="txtDocumento" id="txtDocumento" class="form-control" required>
                        </div>
                        <div class="pb-3">
                            <label for="txtNombre">Nombre:*</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                        </div>
                        <div class="pb-3">
                            <label for="txtNombre">Teléfono:</label>
                            <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                        </div>
                        <div class="pb-3">
                            <label for="txtCorreo">Correo:*</label>
                            <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" required>
                        </div>
                        <div>
                            <label for="">Archivo adjunto</label>
                            <input type="file" name="archivo" id="archivo" acccept=".jpg, .jpeg, .png">
                            <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                        </div>
                        <div class="pb-3">
                            <div class="pb-3">
                                <button type="submit" class="btn btn-primary">
                                    GUARDAR
                                </button>
                                <a href="index.php" class="btn btn-danger">
                                    NUEVO
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-8 pb-4">
                    <table class="table border shadow table-hover">
                        <thead>
                            <th>Imagen</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php foreach ($aClientes as $cliente) { ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $cliente["documento"]; ?> </td>
                                    <td><?php echo $cliente["nombre"]; ?> </td>
                                    <td><?php echo $cliente["telefono"]; ?> </td>
                                    <td><?php echo $cliente["correo"]; ?> </td>
                                    <td>
                                        <a href=""><i class="fa-solid fa-pencil"></i></a>
                                        <a href=""><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
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