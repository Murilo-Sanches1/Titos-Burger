<?php

    require "connect.php";
    
    // $querySQL = "SELECT * FROM tb_acl WHERE id_status = '2' ORDER BY descricao ASC";
    $querySQL = "SELECT * FROM tb_usuario WHERE nome_usuario != '' AND email_usuario != ''";

    if($resultSQL = mysqli_query($connect, $querySQL)){
?>  
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-size: 62.5%;
            padding: 5rem;

        }

      .table{
        border: 1px solid black;
      }
    </style>
    <body>
        <table class="table">
            <tr>
                <!-- <td>Tipo de ACL</td>
                <td>Descrição ACL</td> -->
                <td>Username</td>
                <td>Email</td>
            </tr>
            <?php
                // while($rowACL = $resultSQL->fetch_array()){
                //     $rowACL[] = $rowACL;
                    
                //     $id_acl= $rowACL["id_acl"];
                //     $tipo_acl = $rowACL["tipo_acl"];
                //     $descricao_acl = $rowACL["descricao"];

                //     $resp = "<tr><td>".$tipo_acl."</td>";
                //     $resp .= "<td>".$descricao_acl."</td></tr>";

                //     echo $resp;
                // }

                while($rowUser = $resultSQL->fetch_array()){
                    $rowUser[] = $rowUser;
                    
                    $username = $rowUser["nome_usuario"];
                    $email = $rowUser["email_usuario"];

                    $resp = "<tr><td>".$username."</td>";
                    $resp .= "<td>".$email."</td></tr>";

                    echo $resp;
                }
                
            }else{
                $resposta = "<h1>Não carregou os dados.</h1>";
                echo $resposta;
            }
            ?>
        </table>
    </body>
</html>