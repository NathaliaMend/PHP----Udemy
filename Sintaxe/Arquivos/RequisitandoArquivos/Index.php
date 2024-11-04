<?php
// Requisitar com include e require

require_once("Gravar.php");
require("Ler.php");

Gravar("vespera", "file.txt");
echo leitura("file.txt");

/* O require retorna erro quando o arquivo php chamado nao existe, o include da null
o require_once pega um arquivo chamado apenas uma vez */
