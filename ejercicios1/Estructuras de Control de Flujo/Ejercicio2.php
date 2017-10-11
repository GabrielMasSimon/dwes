<?php

$palabra1 = $_GET['p1'];
$palabra2= $_GET['p2'];

$longitud1 = strlen($palabra1);
$longitud2 = strlen($palabra2);

if ($longitud1 > $longitud2) {
echo "La palabra más larga es $palabra1 .";
}
else {
echo "La palabra más larga es $palabra2 .";
}
 ?>
