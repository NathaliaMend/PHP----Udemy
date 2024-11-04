<?php
// Criando uma cookie:
setcookie("nome", "valor", tempo_de_vida);

// Obter o valor de uma cookie:
$_COOKIE ("nome"); //tambem pelo filter é possivel --> [array]

//Alterar o valor de uma cookie:
setcookie("nome", "valor_novo");

//Deletar o cookie:
setcookie("nome", "valor", time() -1);


