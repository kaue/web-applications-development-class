<?php

$x = 12;
$x_ref = 21;

var_dump($x);
var_dump($x_ref);

$x_ref = &$x;
$x = 33;

var_dump($x);
var_dump($x_ref);
?>