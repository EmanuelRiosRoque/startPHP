<?php include 'includes/header.php';

$nombreCliente = "Emanuel Rios Roque";

// Conocer extencion de un sring
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en un string
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertir texto a mayusculas 
echo strtoupper($nombreCliente);

// Convertir texto a minusculas
echo strtolower($nombreCliente);


$mail1 = "correo@gmail.com";
$mail2 = "Correo@gmail.com";

var_dump( strtolower($mail1) === strtolower($mail2) );

// Cambiar una palabra 
echo str_replace('Emanuel', 'E', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, "Emanuel");

// Concatenar strings

$tipoCliente = "Premium";
echo "<br>";
//1
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";
//2
echo "El cliente {$nombreCliente} es {$tipoCliente}";
include 'includes/footer.php';