<?php
  $hashWeb = $_GET['idRec'];
   print_r($hashWeb);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" />
    <style>
      body {
        background-color: #000010;
        font-family: sans-serif;
      }
      html {
        height: 100vh;
        width: 100vw;
      }
      form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        max-width: 25%;
        max-height: 100%;
        margin: 10rem auto 0 auto;
      }
      h2,
      label {
        color: white;
      }
    </style>
</head>
<body>
  <main>
    <!-- <form action="api/controller/validation/recovery-pass-update.php" method="post"> -->
    <form action="recovery-pass-update.php" method="post" class="form">
      <h2>Recuperar Senha</h2>

      <label for="usuario">Usuario</label>
      <input type="text" name="login-user" id="usuario" placeholder="Digite seu usuario" class="form-control"/>
      <br />
      <label for="email">Email</label>
      <input type="email" name="email-user" id="email" placeholder="Digite seu email" class="form-control"/>
      <br />

      <label for="nova-senha">Nova Senha</label>
      <input type="password" name="login-pass" id="nova-senha" placeholder="Digite sua nova senha" class="form-control"/>
      <br />
      <label for="nova-senha-confirmada">Confirme a Senha</label>
      <input type="password" name="login-pass-conf" id="nova-senha-confirmada" placeholder="Confirme sua senha" class="form-control"/>
      <br />
      <input type="hidden" name="idRec" id="idRec" value="<?=$hashWeb?>" />
      <br />
      <button class="btn btn-danger">Recuperar Senha</button>
    </form>
  </main>
</body>
</html>


