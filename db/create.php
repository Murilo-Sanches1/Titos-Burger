<?php

    require "connect.php";
    
    $nome = "teste4";
    // $nome = $_POST['firstName'];
    $email = "teste@teste4";
    $pass = "123123";
    $hash = "egsegseg";
    $idAcl = "1";
    $idStatus = "2";
    $idGenero = "1";

    $querySelect = $connect->query("SELECT * FROM tb_usuario WHERE nome_usuario = '$nome' OR email_usuario = '$email'");

    if(mysqli_num_rows($querySelect) > 0){
        $resp = "<h1>Username ou email já cadastrados</h1>";
    }else{
        $sqlInsert = "INSERT INTO tb_usuario (nome_usuario, email_usuario, senha_usuario, hash, id_acl, id_status, id_genero
                        )VALUES('$nome', '$email', '$pass', '$hash', '$idAcl', '$idStatus', '$idGenero')"; 

        if($connect->query($sqlInsert) === TRUE){
            $resp = "<h1>Cadastrado com sucesso</h1>";
        } else{
            $resp = "<h1>Ocorreu um erro ao cadastrar seus dados :/</h1>";
        }
    }
    echo $resp;

    $connect->close();
?>
