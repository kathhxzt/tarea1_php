<?php

$nombre = $_POST['nombre'];
$producto = $_POST ['producto'];
$precio = $_POST ['precio'];
$cantidad = $_POST ['cantidad'];

$r = ($cantidad * $precio);

echo "su nombre es: " .$nombre. "<br>";
echo "El producto que compro: " . $producto. "<br>";
echo "subtotal: ". $precio. "<br>";
echo "total a pagar: ". $r;



