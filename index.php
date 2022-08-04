<?php include_once("configs/global.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= TITULO ?></title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="assets/css/adminStyle.css">

    <style>
        .hidden{
            display: none;
        }
    </style>
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center align-self-center login-page">
        <div class="card card-login">
            <div class="card-body">
                <h5 class="card-title text-center">Acesso Restrito</h5>

                <form action="api/controller/validation.php" method="POST" class="form-login">
                    <div class="py-2">
                        <input type="text" class="form-control" placeholder="Usuário" name="user">
                    </div>
                    <div class="py-2">
                        <input type="password" class="form-control" placeholder="Senha" name="pass">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-titos">Entrar</button>
                    </div>
                    <div style="display:flex;justify-content:space-between;">
                        <a href="recuperar-senha.html" class="link-dark">Esqueci a senha</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#dados-clientes">
                            Cadastrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal bd-example-modal-lg" tabindex="-1" id="dados-clientes">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="text-decoration: underline;">Cadastro de cliente</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <select name="" id="lista" class="form-select">
                                <option value="pf" selected>Pessoa Física</option>
                                <option value="pj">Pessoa Jurídica</option>
                            </select>
                        </div>
                    </div>
                    <div id="form-fisica" class="">
                        <div class="row" style="margin-top: 5px;">
                            <div class="col-3">
                                Usuário
                                <input type="text" class="form-control" placeholder="Usuário" name="usuario"
                                    id="usuario">
                            </div>
                            <div class="col-3">
                                Senha
                                <input type="text" class="form-control" placeholder="senha" name="senha" id="senha">
                            </div>
                            <div class="col-3">
                                E-mail
                                <input type="text" class="form-control" placeholder="E-mail" name="E-mail" id="e-mail">
                            </div>
                            <div class="col-2">
                                Gênero
                                <select name="gender" id="genero" class="form-select">
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                    <option value="3">Cisgênero</option>
                                    <option value="4">Transgênero</option>
                                    <option value="5">Agênero</option>
                                    <option value="6">Não-binário</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px;">
                            <div class="col-3">
                                CPF
                                <input type="text" class="form-control" placeholder="CPF" name="cpf" id="cpf"
                                    maxlength="11">
                            </div>
                            <div class="col-3">
                                RG
                                <input type="text" class="form-control" placeholder="RG" name="rg" id="rg">
                            </div>
                        </div>
                    </div>

                    <div id="form-juridica" class="hidden">
                        <div class="row" style="margin-top: 5px;">
                            <div class="col-3">
                                Razão Social
                                <input type="text" class="form-control" id="razao-social">
                            </div>
                            <div class="col-3">
                                Nome Fantasia
                                <input type="text" class="form-control" id="nome-fantasia">
                            </div>
                            <div class="col-3">
                                CNPJ
                                <input type="text" class="form-control" id="cnpj">
                            </div>
                            <div class="col-3">
                                IE
                                <input type="text" class="form-control" id="ie">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px;">
                            <div class="col-3">
                                IM
                                <input type="text" class="form-control" id="im">
                            </div>
                            <div class="col-3">
                                Isento IS <br>
                                <input type="checkbox" id="isento">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="fisica-botao"
                        onclick="cadastrarClienteFisico()">Cadastar Pessoa Física</button>
                    <button type="submit" class="btn btn-success hidden" id="juridica-botao"
                        onclick="cadastrarClienteJuridico()">Cadastar Pessoa Jurídica</button>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'includes/footer.inc.php'; ?>