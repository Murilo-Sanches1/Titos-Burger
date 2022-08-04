<?php

include_once '../model/classusuarios.php';

//  if(isset($_POST['nome'])){
//      $nome = $_POST['nome'];
//      $sobrenome = $_POST['sobrenome'];
//      $genero = $_POST['genero'];
//      $nascimento = $_POST['nascimento'];
//      $rg = $_POST['rg'];
//      $cpf = $_POST['cpf'];

//      $clienteFisico = new ClassUsuarios();
//      $clienteFisico->DOAWODAOW($nome, $sobrenome, $genero, $nascimento, $rg, $cpf);

if(isset($_POST['usuario'])){
     $usuario = $_POST['usuario'];
     $senha = $_POST['senha'];
     $email = $_POST['email'];
     $genero = $_POST['genero'];
     $cpf = $_POST['cpf'];
     $rg = $_POST['rg'];

     $clienteFisico = new ClassUsuarios();
     $clienteFisico->testeDois($usuario, $senha, $email, $genero, $rg, $cpf);
 } else{
     $razaoSocial = $_POST['razaoSocial'];
     $nomeFantasia = $_POST['nomeFantasia'];
     $cnpj = $_POST['cnpj'];
     $ie = $_POST['ie'];
     $im = $_POST['im'];
     $isento = $_POST['isento'];
 }

// $cliente = new ClassUsuarios();
// $cliente->setFirstName($firstName);
// $cliente->setLastName($lastName);
// $cliente->setBirthday($birthday);
// $cliente->setGender($gender);
// $cliente->setRg($rg);
// $cliente->setCpf($cpf);