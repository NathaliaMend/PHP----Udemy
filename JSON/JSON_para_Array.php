<?php
/*
 * "titulo":"Titanic", \
"sinopse":"Navio colide em um iceberg e afunda", \
"ano":2017, \
"horarios":[  \
"16:00",  \
"19:00",  \
"20:00"
]
}
 */
//CONVERTENDO UM JSON PARA UM ARRAY:
$arrayFilme = array(
    "titulo" => "Tinanic",
    "sinopse" => "Um navio colide em um iceberg e afunda",
    "ano" => 2017,
    "horarios" => array(
        "16:00",
        "19:00",
        "20:00"
    )
);
//var_dump($arrayFilme);
$jsonStr = json_encode($arrayFilme);
echo $jsonStr;
