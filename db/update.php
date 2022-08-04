<?php

    require "connect.php";

    $descricao = 'ADM';
    $idAcl = 4;

    $querySelect = $connect->query("SELECT * FROM tb_acl WHERE descricao = '$descricao' AND id_acl = '$idAcl'");

    if(mysqli_num_rows($querySelect) > 0){
        $resp = '<h1>"'. $descricao .'" já está cadastrado</h1>';

    }else{
        $queryUpdate = $connect->query("UPDATE tb_acl SET descricao = '$descricao' WHERE id_acl = '$idAcl'");

        if($queryUpdate === TRUE){
            $resp = '<div style="display:flex; justify-content:center; align-itens:center;"> 
                        <h1 style="color:green; font-family: sans-serif; font-size: 64px;">Dados alterados com sucesso</h1>
                     </div>';
        }else{
            $resp = '<h1 style="color:red;text-align:center;">Dados NÂO alterados, tente novamente depois :/</h1>';
        }
    }

    echo $resp;
    $connect->close();
?>