<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

//Acceder a un elemento de un array
echo $carrito[1];

//Agregar elemento al array
$carrito[3] = "Nuevo producto...";

//Añadir elemento nuevo al final
array_push($carrito, 'Mouse');

//Añadir elemento nuevo al inicio
array_unshift($carrito, 'Audifonos');

//Util para ver contenidos de array
echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";


$cliente = array('Cliente 1', 'Cliente 2','Cliente 3');
echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";
echo $cliente[1];

include 'includes/footer.php';