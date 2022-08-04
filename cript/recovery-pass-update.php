<?php

require 'connect.php';

$emailUser      = $_POST['email-user'];
$loginUser      = $_POST['login-user'];
$passUser       = $_POST['login-pass'];
$passUserConf   = $_POST['login-pass-conf'];
$hashWeb        = $_POST['idRec'];


if($passUser === $passUserConf){

    $consultSQL = "SELECT * FROM tb_usuario WHERE nome_usuario = '$loginUser' 
    AND email_usuario = '$emailUser' AND hash = '$hashWeb'";

    $resultSQL = $conn->query($consultSQL);

    if($resultSQL == TRUE){
        if(mysqli_num_rows($resultSQL) > 0 ){
            
            // tanto para Atualizar quanto para novos usuarios
            $hash = md5($emailUser . $passUser);

            $passUser   = md5($passUser);
            $custo      = '09';
            $salt       = $hash;
 
            // Gera um hash baseado em bcrypt
            $newHash = crypt($passUser, '$2b$' . $custo . '$' . $salt . '$');
            //até aqui

            $upDate = "UPDATE tb_usuario SET
            senha_usuario = '$passUser',
            hash = '$newHash'
            WHERE nome_usuario = '$loginUser' 
            ";

            if($conn->query($upDate) === TRUE){
                $resp = "Senha alterada com sucesso! ";
            }else{
                $resp = "Erro!";
            }

        }else{
            $resp = "Erro!";
        }
    }else{
        $resp = "Erro!";
    }


   

}else{
    $resp = "
    <form action=\"recovery-pass-update.php\" method=\"post\">
    <h2>Recuperar senha</h2>
   <h4>Senhas não são iguais corrijá</h4>

    <label>Email</label>
    <input type=\"mail\" name=\"email-user\" placeholder=\"Digite seu email\" value=\"$emailUser\">
    <br>
    <label>Usuario</label>
    <input type=\"text\" name=\"login-user\" placeholder=\"Digite seu usuario\" value=\"$loginUser\">

    <br>
    <label>Nova senha</label>
    <input type=\"password\" name=\"login-pass\" placeholder=\"Digite a nova senha\">
    <label>Confirme a senha</label>
    <input type=\"password\" name=\"login-pass-conf\" placeholder=\"Confirme a senha\">

    <input type=\"hidden\" name=\"idRec\" value=\"$hashWeb\">
<br>
    <button>Recuperar senha</button>
</form>
    ";
}

?>

<?=$resp ?>
