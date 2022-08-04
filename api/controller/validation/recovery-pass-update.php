<?php

require '../../../db/connect.php';

$emailUser      = $_POST['email-user']; 
$loginUser      = $_POST['login-user'];
$passUser       = $_POST['login-pass'];
$passUserConf   = $_POST['login-pass-conf'];
$hashWeb        = $_POST['idRec'];

if ($passUser === $passUserConf) {
    $consultSql = "SELECT * FROM tb_usuario WHERE nome_usuario = '$loginUser' AND email_usuario = '$emailUser' AND hash = '$hashWeb'";
    $resultSql = $connect->query($consultSql);

    if ($resultSql == TRUE) {
        if (mysqli_num_rows($resultSql) > 0) {
            $newHash = md5($emailUser . $passUser."murilo123");

            $update = "UPDATE tb_usuario set senha_usuario = '$passUser', hash = '$newHash' WHERE nome_usuario = '$loginUser'";

            if ($connect->query($update) == TRUE) {
                $resp = "<div style='display: flex; justify-content: center; margin-top: 20%;font-family: sans-serif; font-size: 60px;color:green;'"."<p>Senha Alterada</p>"."</div>";
            } else {
                $resp = "Erro ao se conectar com o Banco de Dados";
            }
        } else {
            $resp = "<div style='display: flex; justify-content: center; margin-top: 20%;font-family: sans-serif; font-size: 60px;color: red;'"."<p>Usuário não existe</p>"."</div>";
        }
    } else {
        $resp = "Erro ao se conectar com o Banco de Dados";
    }
} else {
    $resp = "<form action=\"recovery-pass-update.php\" method=\"post\">
                <h2>Recuperar Senha</h2>

                <label for=\"email\">Email</label>
                <input type=\"email\" name=\"email-user\" id=\"email\" placeholder=\"Digite seu email\" />
                <br />
                <label for=\"usuario\">Usuario</label>
                <input type=\"text\" name=\"login-user\" id=\"usuario\" placeholder=\"Digite seu usuario\" />
                <br />

                <label for=\"nova-senha\">Nova Senha</label>
                <input type=\"password\" name=\"login-pass\" id=\"nova-senha\" placeholder=\"Digite sua nova senha\" />
                <br />
                <label for=\"nova-senha-confirmada\">Confirme a Senha</label>
                <input type=\"password\" name=\"login-pass-conf\" id=\"nova-senha-confirmada\" placeholder=\"Confirme sua senha\" />
                <br />
                <input type=\"hidden\" name=\"idRec\" id=\"idRec\" value=\"<?=$hashWeb?>\" />
                <br />
                <button>Recuperar Senha</button>
            </form>";
};

echo $resp;
?> 