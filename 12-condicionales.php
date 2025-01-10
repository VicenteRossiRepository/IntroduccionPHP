<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if ($autenticado && $admin) {
    echo 'Usuario autenticado correctamente';
}else{
    echo 'Usuario no autenticado';
};
echo '<br>';

// If anidados
$cliente = [
    'nombre' => 'Vicente',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if(empty($cliente)){
    echo 'El cliente no tiene información';
}else{
    echo 'El cliente tiene información';
    if($cliente['saldo']>0){
        echo ' El cliente tiene saldo';
    }else{
        echo ' El cliente no tiene saldo';
    }
};
echo '<br>';

// else if
if($cliente['saldo']>0){
    echo 'El cliente tiene saldo';
}elseif($cliente['informacion']['tipo'] == 'Premium'){
    echo 'El cliente es Premium';
}else{
    echo 'El cliente no es Premium';
};
echo '<br>';

// Switch

$tecnologia = 'JavaScript';

switch($tecnologia){
    case 'PHP':
        echo 'El lenguaje de programación es PHP';
        break;
    case 'JavaScript':
        echo 'El lenguaje de programación es JavaScript';
        break;
    default:
        echo 'El lenguaje de programación es desconocido';
        break;
};

include 'includes/footer.php';