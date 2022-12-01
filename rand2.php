<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$valor = rand(1, 5);

//Si el valor es el 1 o el valor es 3 o el valor es 5 entonces 
if($valor == 1 || $valor == 3 || $valor == 5){
    echo "El numero $valor es impar";

}else{
    echo "El numero $valor par";
}

?>