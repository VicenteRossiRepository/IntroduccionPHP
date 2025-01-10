<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Vicente',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente['nombre'];
echo '<br>';
echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 123123123;
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';