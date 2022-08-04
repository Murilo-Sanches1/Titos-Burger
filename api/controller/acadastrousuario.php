<?php

    include_once('../model/classusuarios.php');
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $genero = $_POST['genero'];
    $dataNasc = $_POST['dataNasc'];
    $login = $_POST['login'];

    $usuario = new ClassUsuarios();
    $usuario->setFirstName($nome);
    $usuario->setLastName($sobrenome);
    $usuario->setBirthday($dataNasc);
    $usuario->setGender($genero);
    $usuario->setLogin($login);

    echo "<pre>";
    var_dump($usuario);
    echo "<pre/>";
