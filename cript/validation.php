<?php
    include_once('../configs/global.php');
    require "connect.php";

    if(!empty($_POST) AND (empty($_POST['login-user']) OR 
    empty($_POST['pass-user']))){// NA MESMA LINHA
        $resp = "Digite o usuário e a senha!";
    }else{

        $loginUser          = $_POST['login-user'];
        $passUserClean      = $_POST['pass-user'];
        $passUser           = md5($_POST['pass-user']);


        $consultQuery = "SELECT * FROM tb_usuario WHERE nome_usuario = '$loginUser' AND senha_usuario = '$passUser'";// NA MESMA LINHA
        
        if($resultSQL = mysqli_query($conn, $consultQuery)){

            if(mysqli_num_rows($resultSQL) > 0){

                while($rowUser = $resultSQL->fetch_array()){
                    $rowUser[] = $rowUser;
                    
                    $loginUser1 = $rowUser['nome_usuario'];
                    $passUser1  = $rowUser['senha_usuario'];
                    $emailUser1 = $rowUser['email_usuario'];
                    $hash1      = $rowUser['hash'];
                    
                    $newHash = md5($emailUser1 . $passUserClean);

                    $custo = '09';
                    $salt = $newHash;
        
                    // Gera um hash baseado em bcrypt
                    $newHash = crypt($passUser, '$2b$' . $custo . '$' . $salt . '$');

                    if (crypt($passUser, $hash1) === $hash1) {

                        setcookie("loginUser", $loginUser1);
                        setcookie("passUser", $passUser1);
    
                        session_start();
     
                        $_SESSION['loginUserSe'] = $loginUser1;
                        $_SESSION['passUserSe'] = $passUser1;
                    
                        header("location:../dashboard.php");
                    } else {
                        $resp = "ERRO - usuário ou senha invalido!";
                    }
                }
            }else{
                $resp = "ERRO - usuário ou senha invalido!";
            }    
        }else{
            $resp = "ERRO ao Consultar";
        }
    }
    $conn->close();
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= TITULO ?></title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/colors.css">
    <link rel="stylesheet" href="../assets/css/adminStyle.css">
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center align-self-center login-page">
        <div class="card card-login">
            <div class="card-body">
                <h5 class="card-title text-center">Acesso Restrito</h5>
                <h4><?=$resp?></h4>
               

                <form action="validation.php" method="post" class="form-login">
                    <div class="py-2">
                        <input type="text" name="login-user" class="form-control" placeholder="Usuário">
                    </div>
                    <div class="py-2">
                        <input type="password" name="pass-user" class="form-control" placeholder="Senha">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-titos">Entrar</button>
                    </div>
                </form>
                <ul class="nav">
                    <li style="margin:15px 7px;">
                        <a href="recuperar-senha.html">Recuperar Senha</a>
                    </li>
                    <li style="margin:15px 7px;">
                        <a href="#">Cadastro de Usuário</a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>