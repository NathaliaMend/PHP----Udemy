<?php
$s = sha1("Ola, mundo!");
echo $s;
echo "<br>";

// MD5
$m = md5("PHP intermediario");
echo $m;
echo "<br>";

// Base64
$senha = base64_encode("criptografias");
echo $senha;
echo "<br>";
echo base64_decode($senha);
