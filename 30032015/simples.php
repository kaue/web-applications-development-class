<?php

    $cli_ip = getenv("REMOTE_ADDR");
    $cli_prt= getenv("REMOTE_PORT");
    $srv_ip = getenv("SERVER_ADDR");
    $srv_prt= getenv("SERVER_PORT");

    echo 'Client: ' . $cli_ip . ':' . $cli_prt . '<br>';
    echo 'Server: ' . $srv_ip . ':' . $srv_prt . '<br>';
?>