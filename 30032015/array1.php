<?php
$vetor = array("abc" => 12, 12 => "abc", "xyz" => "Fulano", 13 => 1900);
$vetor[5] = 20;
$vetor[10] = 150;
$vetor["BD"] = 4;

var_dump($vetor);

unset($vetor[12]);
unset($vetor["xyz"]);

var_dump($vetor);
?>