<?php
    require("./db/connect.php");


    session_start();

    $loginUser = $_SESSION['loginUserSe'];
    $passUser = $_SESSION['passUserSe'];

    setcookie('loginUser', $loginUser);
    setcookie('passUser', $passUser);

    if(isset($_COOKIE['loginUser'])){
        $loginUser1 = $_COOKIE['loginUser'];
    }   

    if(isset($_COOKIE['passUser'])){
        $passUser1 = $_COOKIE['passUser'];
    }

    if(empty($loginUser) || empty($passUser)){

        $sqlQuery = "SELECT * FROM tb_usuario WHERE nome_usuario = '$loginUser' AND senha_usuario = '$passUser'";

        if($resultSQL = mysqli_query($connect, $sqlQuery)){
            if(mysqli_num_rows($resultSQL) == 0){
                setcookie('loginUser');
                setcookie('passUser');
                header('location:../../index.php');
                exit;
            }
        } else{
            setcookie('loginUser');
            setcookie('passUser');
            header('location:../../index.php');
            exit();
        }
        $connect->close();
    }