<?php

    include_once('../model/classcatalogoendereco.php');

    // $idCatalogoEndereco = $_POST['idCatalogoEndereco'];
    $cep = $_POST['cep'];
    $enderecoPreferencial = $_POST['enderecoPreferencial'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    $endereco = new ClassCatalogoEndereco();
    // $endereco->setIdCatalogoEndereco($idCatalogoEndereco);
    $endereco->setCep($cep);
    $endereco->setEnderecoPrincipal($enderecoPreferencial);
    $endereco->setLogradouro($logradouro);
    $endereco->setNumero($numero);
    $endereco->setComplemento($complemento);
    $endereco->setBairro($bairro);
    $endereco->setCidade($cidade);
    $endereco->setUf($uf);

    echo "<pre>";
    var_dump($endereco);
    echo "</pre>";