<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Definicion 
function contar($aArray){
    $contador = 0;
    foreach($aArray as $item) {
        $contador++;
    }
    return $contador;



}


//Uso
$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000

);

$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000

);

$aProductos[] = array(
    "nombre" => "Aire acondicionado Split Inverter Frio/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "5553AIQ1201E",
    "stock" => 5,
    "precio" => 45000

);

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

$aNotas[] = array (9,8,9.50,4,7,8);




echo "<br>Cantidad de productos:" . contar($aProductos);
echo "<br>Cantidad de pacientes:" . contar($aPacientes);
echo "<br>Cantidad de notas:" . contar($aNotas);
