<?php

    include_once("../model/classcatalogocontato.php");
    include_once("../model/classtipocontato.php");

    $contato = $_POST['contato'];
    $tipoContato = $_POST['tipoContato'];

    $contatos = new ClassCatalogoContato();
    $contatos->setContato($contato);
    $tipo = new ClassTipoContato();
    $tipo->setTipoContato($tipoContato);

    echo "<pre>";
    var_dump($contatos);
    var_dump($tipo);
    echo "<pre/>";