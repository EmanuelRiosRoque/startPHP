<?php include 'includes/header.php';
// Formas de crear areglos
// $carrito = array();
$carrito = ['Tablet', 'Television', 'Laptop'];

// Util para ver los contenido de un array 

echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Accerder a un elemento en especifico
echo $carrito[1];

// Agregar nuevo elemento
$carrito[3] = 'Nuevo Producto...';

// Añade un elemento nuevo al final del arreglo
array_push($carrito, 'Audifonos'); 

echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Añade un elemento nuevo al inicio del arreglo
array_unshift($carrito, 'Smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';