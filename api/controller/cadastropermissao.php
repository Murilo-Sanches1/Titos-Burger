<?php

    include_once("../model/classpermissaousuario.php");

    $modulo = $_POST['modulo'];
    $tipoPermissao = $_POST['tipoPermissao'];

    $permissao = new ClassPermissaoUsuario();
    $permissao->setModulo($modulo);
    $permissao->setTipoPermissao($tipoPermissao);

    echo "<pre>";
    var_dump($permissao);
    echo "</pre>";
