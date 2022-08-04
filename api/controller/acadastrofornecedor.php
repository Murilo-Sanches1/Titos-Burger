<?php

    include_once('../model/classusuarios.php');

    $nomeFornecedor = $_POST['nomeFornecedor'];
    $sobrenomeFornecedor = $_POST['sobrenomeFornecedor'];
    $generoFornecedor = $_POST['generoFornecedor'];
    $fundacaoFornecedor = $_POST['fundacaoFornecedor'];
    $razaoFornecedor = $_POST['razaoFornecedor'];
    $fantasiaFornecedor = $_POST['fantasiaFornecedor'];
    $cnpjFornecedor = $_POST['cnpjFornecedor'];
    $ieFornecedor = $_POST['ieFornecedor'];
    $imFornecedor = $_POST['imFornecedor'];
    $isentoIm = $_POST['isentoIm'];

    $fornecedor = new ClassUsuarios();
    $fornecedor->setFirstName($nomeFornecedor);
    $fornecedor->setLastName($sobrenomeFornecedor);
    $fornecedor->setBirthday($generoFornecedor);
    $fornecedor->setGender($fundacaoFornecedor);
    $fornecedor->setRazaoSocial($razaoFornecedor);
    $fornecedor->setNomeFantasia($fantasiaFornecedor);
    $fornecedor->setCnpj($cnpjFornecedor);
    $fornecedor->setIe($ieFornecedor);
    $fornecedor->setIm($imFornecedor);
    $fornecedor->setIsIm($isentoIm);

    echo "<pre>";
    var_dump($fornecedor);
    echo "<pre/>";
