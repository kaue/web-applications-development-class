<?php

/*
 6. Sobre corres
pondência entre caracteres e os valores ASCII.
Crie o script
int1.php
que contenha os comandos abaixo.
$caracter='z';
$decimal=122;
$caracter1=ord($caracter);
E, u
tilizando a função
“
printf
”
, apresente
:
a)
O
valor
armazenado pela variável
$caracter
1
e
m
decimal
;
b)
O
valor armazenado pela variável
$decimal
c
omo caracter
.
c)
O
valor armazenado pela variável
$decimal
como
“string”
.
 */
    $caracter='z';
    $decimal=122;
    $caracter1=ord($caracter);

    printf('%d',$caracter);echo '<br>';
    printf('%c', $decimal);echo '<br>';
    printf('%s', $decimal);echo '<br>';
?>