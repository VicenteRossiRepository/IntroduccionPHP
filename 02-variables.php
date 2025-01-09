<?php include 'includes/header.php';

$nombre = "Vicente";

echo $nombre;
echo "<br>";
var_dump($nombre);

define('constante', "Este es el valor de la constante");
echo "<br>";
echo constante;

const constante2 = "Hola 2";
echo "<br>";
echo constante2;

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";

include 'includes/footer.php';