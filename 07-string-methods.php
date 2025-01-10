<?php include 'includes/header.php';

$nombreCliente= "Vicente Rossi";


//Conocer extencion de un string
echo strlen($nombreCliente);
echo "<br>";
var_dump($nombreCliente);
echo "<br>";

//Eliminar espacios en blanco al principio y al final
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br>";

//Convertir texto a mayuscula
echo strtoupper($nombreCliente);
echo "<br>";
//Convertir texto a minusculas
echo strtolower($nombreCliente);
echo "<br>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br>";

echo str_replace('Vicente', 'V.', $nombreCliente);
echo "<br>";

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Vicente');
echo "<br>";

$tipoCliente = 'Premium';
echo "El cliente ".$nombreCliente." es ".$tipoCliente;
echo "<br>";

echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';