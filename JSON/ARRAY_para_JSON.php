<?php
$jsonStr = '{"titulo":"Tinanic","sinopse":"Um navio colide em um iceberg e afunda","ano":2017,"horarios":["16:00","19:00","20:00"]}';

$arrFilme = json_decode($jsonStr);

//var_dump($arrFilme);
echo "<p><b>Título:</b>. $arrFilme->titulo </p>";
echo "<p><b>Sinopse:</b>". $arrFilme->{"sinopse"} ."</p>"; //Outra maneira
echo "<p><b>Ano:</b>. $arrFilme->ano </p>";
echo "<p><b>Horários:</b></p>";

//for ($i= 0; $i < count($arrFilme->horarios); $i++){
//    echo "<p>---------<b>". $arrFilme->horarios[$i]."</b></p>";
//}

foreach ($arrFilme->horarios as $horario){
    echo "<p>----<b>". $horario."</b></p>";
}
