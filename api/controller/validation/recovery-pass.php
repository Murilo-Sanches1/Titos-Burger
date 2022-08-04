<?php

$baseUrl = 'http://'. $_SERVER['SERVER_NAME'];
$baseUrl .= '/phpwow';

require '../../../db/connect.php';

$emailUser = $_POST['email-user'];
$loginUser = $_POST['login-user'];

$consultSql = "SELECT * FROM tb_usuario WHERE nome_usuario = '$loginUser' AND email_usuario = '$emailUser'";

if (($result = $connect->query($consultSql)) == TRUE) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_row($result)) {
            $hash = $row[4];
            // print_r($hash);
        }

        $urlRecovery = $baseUrl . "/api/controller/validation/recuperacao-senha.php?idRec=" .$hash;

        $assunto = "=?UTF-8?B?".base64_encode(
            'Recuperar senha - Titos Burger - '.date('d/m/y').'-'.date('H:i')
        )."?=";

        $destinatario = $emailUser;

        $mensagem = "<table style='width: 100%; margin: 0px; padding: 0px'>
                        <tr>
                            <td colspan='2'>
                            <h1>Recuperar Senha - Titos Burger</h1>
                            </td>
                        </tr>
                        <tr>
                            <td>URL de recuperação de senha:</td>
                            <td><a href='$urlRecovery' target='_blank'>$urlRecovery</a></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>$emailUser</td>
                        </tr>
                    </table>";
    } else {
        echo "ruim <br>";
    }
    $connect->close();
} else {
    echo "não conectou <br>";
};

echo $mensagem;

