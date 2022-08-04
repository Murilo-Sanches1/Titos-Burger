<?php

    $servidorSRV = "localhost";
    $usuarioSRV = "root";
    $senhaSRV = "";
    $dbSRV = "titodb";

    $connect = mysqli_connect($servidorSRV, $usuarioSRV, $senhaSRV, $dbSRV) or die("Não foi possivel conectar: " . mysqli_error());

    mysqli_set_charset($connect, "utf8");

?>