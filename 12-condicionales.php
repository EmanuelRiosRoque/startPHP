<?php include 'includes/header.php';

$autentificacion = true;
$admin = false;

if ($autentificacion && $admin) {
    echo "Auntentificacion correcta ....";
} else {
    echo "Auntentificacion Invalida ....";
};


// If anidados
$cliente = [
    'Nombre'    => 'Emanuel',
    'Saldo'     => 200,
    'Info'      => [
        'Tipo'  => 'Premium'
    ]
];

echo "<br>";

//Si el arreglo de cliente esta vacio --- entonces...
if ( !empty($cliente) ) {
    echo "El arreglo no esta vacio";

    echo "<br>";

    if ($cliente ['Saldo'] > 0) {
        echo "El saldo del cliente esta disponible";
    } else{
        echo "Saldo del cliente no disponible";
    };
};

// Else If
echo "<br>";
 if ($cliente ['Saldo'] > 0) {
    echo "El cliente tiene saldo";
 } else if ($cliente['Info']['Tipo'] === 'Premium') {
    echo "El cliente es premium";
 } else {
    echo "No hay cliente definido";
 };



echo "<br>";
// Swicht
$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP un exelente lenguaje";
        break;

    case 'JavaScript':
        echo "JS un lenguaje dificil";
        break;

    case 'HTML':
        echo "HTML un lenguaje de maquetacion";
        break;

    default:
        echo "Algun lenguaje que no se cual es";
        break;
};


include 'includes/footer.php';