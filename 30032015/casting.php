<?php

/*
 Sobre “casting”. Crie o script casting.php com os seguinte passos:
i.
Atribuição de valores:
$boo
lean = false;
$inteiro =
1
0;
$inteiro1 = 0;
$float = 1.2;
$cadeia="abcd";
$cadeia1=
""
;
ii.
Imprime o conteúdo das variáveis no formato:
$cadeia = abcd
Onde o lado esquerdo é o nome da variável
(com o símbolo “$”)
e o lado direito o
seu conteúdo.
iii.
Verifica
c
ada uma da
s variáveis com a função var_dump
.
iv.
Verifica
cada uma
das variáveis com casting para ‘boolean’, utilizando a função
var_dump
, da seguinte forma:
var_dump((boolean)$inteiro);
Analise quais valores são considerados falsos ou true
 */

    $boolean = false;
    $inteiro =10;
    $inteiro1 = 0;
    $float = 1.2;
    $cadeia= "abcd";
    $cadeia1= "";
    echo '$boolean = ' . $boolean . '<br>';
    echo '$inteiro = ' . $inteiro . '<br>';
    echo '$inteiro1 = ' . $inteiro1 . '<br>';
    echo '$float = ' . $float . '<br>';
    echo '$cadeia = ' . $cadeia . '<br>';
    echo '$cadeia1 = ' . $cadeia1 . '<br>';
    echo '<p> Var Dump </p>';
    var_dump((boolean)$boolean); echo '<br>';
    var_dump((boolean)$inteiro); echo '<br>';
    var_dump((boolean)$inteiro1); echo '<br>';
    var_dump((boolean)$float); echo '<br>';
    var_dump((boolean)$cadeia); echo '<br>';
    var_dump((boolean)$cadeia1); echo '<br>';
?>