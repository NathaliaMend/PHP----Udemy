<?php
function abrirConexao()
{
    $connection = new PDO("mysql:host=localhost;dbname=curso_php;charset=utf8", 'root', '');
    return $connection;
}
