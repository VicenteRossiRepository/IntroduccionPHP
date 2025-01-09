<?php include 'includes/header.php';

$num1 = 20;
$num2= 30;
$num3 = 30;
$num4 = '30';

var_dump($num1 > $num2);
echo '<br>';
var_dump($num1 < $num2);
echo '<br>';
var_dump($num1 >= $num2);
echo '<br>';
var_dump($num1 <= $num2);
echo '<br>';
var_dump($num3 == $num2);
echo '<br>';
var_dump($num2 == $num4);
echo '<br>';
var_dump($num2 === $num4);
echo '<br>';

//Comparacion binaria de valores

//-1 si el valor de la izquierda es menor
var_dump($num1 <=> $num2);
echo '<br>';

//0 si los valores son iguales
var_dump($num3 <=> $num2);
echo '<br>';

//1 si el valor de la izquierda es mayor
var_dump($num2 <=> $num1);
echo '<br>';





include 'includes/footer.php';