<?php include 'includes/header.php';

// While
$i = 0;

while ($i <= 10) {
    echo $i . "<br>";

    $i++; //Incremento 1 a 1
}

// Do While
$i = 0;

do{

    echo $i . "<br>";
    $i++;

} while ($i <= 10);

/*
 * 3 Imprimir Fizz 
 * 5 Imprimir Buzz 
 * 3 y 5 Imprimir Fizz Buzz 
*/

// For loops
// for ($i=1; $i < 1000 ; $i++) { 
//     if ($i % 3 === 0 && $i % 5 === 0)  {
//         echo $i . " -  Fizz Buzz <br/>";
//     }else if ($i % 3 === 0) {
//         echo $i . " -  Fizz <br/>";
//     }else if ($i % 5 === 0) {
//         echo $i . " -  Buzz <br/>";
//     }else{
//         echo $i . "<br/>";
//     }
// }

// For Each
$clientes = ['Pedro', 'Juan', 'Caren'];

foreach ($clientes as $cliente ) {
    echo $cliente . "<br/>";
}

// Cuenta la extencion del arreglo
// echo count($clientes);
// for ($i=0; $i < count($clientes) ; $i++) { 
//     echo $clientes[$i] . "<br/>"; 
// }

// Arrego asociativo
$cliente = [
    'Nombre' => 'Emanuel',
    'Saldo'  => 200,
    'Tipo'  => 'Premium'
];

foreach ($cliente as $key => $valor ) {
    echo $key . " - ".  $valor . "<br/>";
}


include 'includes/footer.php';