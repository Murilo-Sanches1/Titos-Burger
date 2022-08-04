<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "workbench";

    $connect = mysqli_connect($servidor, $usuario, $senha, $db) or die("Não foi possivel conectar: " . mysqli_error());

    mysqli_set_charset($connect, "utf8");

?>