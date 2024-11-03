<?php
//Valor por referancia:
$salario = 1526.67;
$valorAjuste = 0;

function AjustarSalario($sal, &$valorAjuste)
{
    $valorAjuste = 300.00;
    return ($sal + $valorAjuste);
}

$valorFinal = AjustarSalario($salario, $valorAjuste);
echo "O valor ajustado é de: <b>R$ {$valorFinal} </b>, com o aumento de: <b>R$ {$valorAjuste}</b>";

// No PHP existem muitas funcoes ja prontas em sua biblioteca
