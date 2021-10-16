<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 === $numero4);
echo "<br/>";

var_dump($numero1 <=> $numero2); // Si el numero de la izq es menor al de la derecha entonces no retornarara -1 / 0 si es que es igial y 1 si no lo es
echo "<br/>";


var_dump($numero2 <=> $numero3); // Si el numero de la izq es menor al de la derecha entonces no retornarara -1 / 0 si es que es igial y 1 si no lo es
echo "<br/>";

var_dump($numero2<=> $numero1); // Si el numero de la izq es menor al de la derecha entonces no retornarara -1 / 0 si es que es igial y 1 si no lo es
echo "<br/>";



include 'includes/footer.php';