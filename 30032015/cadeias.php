<?php

/*
 * To change this template use Tools | Templates.
 */
    $str = "Teste";
    echo "$str" . '<br>';
    echo '$str' . '<br>';
    echo "Conteudo = $str" . '<br>';
    echo '$str = ' . $str . '<br>';
    $str = $str . '<br>t<br>asd<br>';
    echo $str;
    $str2 = 'abcdefghijk';     
    for($i=0; $i<strlen($str2); $i++) {
        if($i % 2 == 0)
            $str2[$i] = strtoupper($str2[$i]);
    }                
    echo $str2;
?>