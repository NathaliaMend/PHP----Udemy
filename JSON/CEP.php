<?php
$cep = "79005430";
$cep = str_replace("-", "", $cep);
$str = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json/');
echo $str;

$arrCidade = json_decode($str); // colocando ', true' o json vira um array. Para acessa-lo:" .{$arrCidade["CEP"] ";
echo "<p><b>CEP:</b> $arrCidade->cep</p>";
echo "<p><b>Logradouro:</b> $arrCidade->logradouro</p>";
echo "<p><b>Complemento:</b> $arrCidade->complemento</p>";
echo "<p><b>Unidade:</b> $arrCidade->unidade</p>";
echo "<p><b>Bairro:</b> $arrCidade->bairro</p>";
echo "<p><b>Localidade:</b> $arrCidade->localidade</p>";
echo "<p><b>UF:</b> $arrCidade->uf</p>";
echo "<p><b>Estado:</b> $arrCidade->estado</p>";
echo "<p><b>Região:</b> $arrCidade->regiao</p>";
echo "<p><b>ibge:</b> $arrCidade->ibge</p>";
echo "<p><b>Gia:</b> $arrCidade->gia</p>";
echo "<p><b>DDD:</b> $arrCidade->ddd</p>";
echo "<p><b>Siafi:</b> $arrCidade->siafi</p>";
