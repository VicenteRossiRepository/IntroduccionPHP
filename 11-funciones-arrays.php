<?php include 'includes/header.php';

//in_array = Buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));
echo '<br />';

//Ordenar elementos de un arreglo
$numeros = [1,3,4,5,1,2]; 
sort($numeros);//De menos a mayor
rsort($numeros); //De mayor a menor


echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo
$cliente = array(
    'saldo' =>200,
    'tipo' =>'Premium',
    'Nombre' =>'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); //Ordena por valores
arsort($cliente); //Ordena por valores en orden inverso
ksort($cliente); //Ordena por llaves
krsort($cliente); //Ordena por llaves en orden inverso
echo "<pre>";
var_dump($cliente);
echo "</pre>";
include 'includes/footer.php';