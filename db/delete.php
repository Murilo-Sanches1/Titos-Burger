<?php

    require "connect.php";

    $idAcl = 4;

    $queryDelete = "DELETE FROM tb_acl WHERE id_acl = '$idAcl'";

    if($connect->query(queryDelete) === TRUE){
        $resp = "<h1>Excluído</h1>";
    }else{
        $resp = "Não foi possível excluir os dados";
    }
    
    $connect->close();
    echo $resp;
?>