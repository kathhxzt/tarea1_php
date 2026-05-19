<?php

$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];

$r = ($nota1 + $nota2 + $nota3) / 3;

echo "el promedio es: " . $r. "<br>";

if ($r >= 6 ){
    echo "aprobado";
}
else{
    echo "reprobado";
}

?>