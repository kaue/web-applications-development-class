<?php
define("I_INICIAL", 11);

$cursos[I_INICIAL] = "SI";
$cursos[] = "CC";
$cursos[] = "EP";
$cursos[] = "PUB";
$cursos[] = "GAMES";

for ($i = 0; $i < count($cursos); $i++) {
    echo $cursos[$i + I_INICIAL] . '<br>';    
}

?>