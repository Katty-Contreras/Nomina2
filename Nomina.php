<?php
require_once "vendedores.php";

$totalNomina = 0;
foreach ($vendedores as $vendedor) {
$salario = $vendedor->calcularsalario();
echo "Vendedor: $vendedor->nombre و Salario: $". number_format($salario,2). "\n";
$totalNomina += $salario;
echo "<br>";
}

echo "El total de la nomina es : $" . number_format($totalNomina, 2) . "\n";
?>