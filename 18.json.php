<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión de 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]

];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //Convertir arreglo a string

$json_array = json_decode($json); //Convertir string a arreglo

var_dump($json);
var_dump($json_array);
echo "</pre>";


include 'includes/footer.php';
