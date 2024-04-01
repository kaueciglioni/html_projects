<?php
$n1 = $_POST["v1"];
$n2 = $_POST["v2"];
$resultado = $n1 + $n2;
header("Location: calculadora.php?res=$resultado");
?>