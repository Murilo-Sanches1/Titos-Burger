<?php
    require("../../db/connect.php");

    $loginUser = $_POST['user'];
    $passUser = $_POST['pass'];


    if(!empty($_POST) && (empty($_POST['user']) || empty($_POST['pass']))){
        $resp = "☠️أدخل المستخدم وكلمة المرور ☠️";
    } else{
        
        $loginUser = $_POST['user'];
        $passUser = $_POST['pass'];

        $sqlQuery = "SELECT * FROM tb_usuario WHERE nome_usuario = '$loginUser' AND senha_usuario = '$passUser'";
    
        if($resultSQL = mysqli_query($connect, $sqlQuery)){
            
            if(mysqli_num_rows($resultSQL) > 0){

                while($rowUser = $resultSQL->fetch_array()){
                    $rowUser[] = $rowUser;

                    $loginUser1 = $rowUser['nome_usuario'];
                    $passUser1 = $rowUser['senha_usuario'];
                    
                    setcookie('loginUser', $loginUser1);
                    setcookie('passUser', $passUser1);

                    session_start();

                    $_SESSION['loginUserSe'] = $loginUser1;
                    $_SESSION['passUserSe'] = $passUser1;
                    
                 header('location:../../dashboard.php');
                }
            } else{
                $resp = "☠️離開這裡離開這裡離開這裡離開這裡";
            }
        } else{
            $resp = "☠️Ошибка при запросе ☠️";
        }
    }
    $connect->close();
?>

<?php include_once("../../configs/global.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= TITULO ?></title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="../../assets/css/colors.css">
    <link rel="stylesheet" href="../../assets/css/adminStyle.css">
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center align-self-center login-page">
        <div class="card card-login">
            <div class="card-body">
                <h5 class="card-title text-center">Acesso Restrito</h5>
                <h4><?=$resp?></h4>
                <form action="validation.php" method="POST" class="form-login">
                    <div class="py-2">
                        <input type="text" class="form-control" placeholder="Usuário" name="user">
                    </div>
                    <div class="py-2">
                        <input type="password" class="form-control" placeholder="Senha" name="pass">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-titos">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>