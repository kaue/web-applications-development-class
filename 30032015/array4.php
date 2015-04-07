<?php
$pessoas = array("RA444444" => "Capitu",
                 "RA555555" => "Cotrim",
                 "RA666666" => "Quincas Borba",
                 "RA777777" => "Brás Cubas",
                 "RA888888" => "Iaiá Garcia",
                 "RA999999" => "Virgília");
$saossep = array();
foreach ($pessoas as $indice => $conteudo){    
    $saossep[$conteudo] = $indice;    
}
var_dump($saossep);
foreach ($pessoas as $indice => $conteudo){    
    $pessoas[$indice] = strtoupper($conteudo);    
}
var_dump($pessoas);
foreach ($pessoas as $indice => $conteudo){    
    $saossep[$indice] = strtolower($conteudo);    
}
var_dump($saossep);
?>