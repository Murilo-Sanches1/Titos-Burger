<?php $nomePagina = 'Gestão de Clientes';
include_once 'includes/head.inc.php';
include_once('api/controller/validation-cookie.php');
?>

<main>
    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 50px;">
        <h5 class="titos-title"><?= $nomePagina ?></h5>
        <div class="controle-usuario" style="padding: 20px;">
            <a href="#" class="nav-link nav-link-user">
                <ion-icon name="person-circle-outline"></ion-icon>
                Olá, Usuário!
            </a>
        </div>
    </div>

    <div class="row me-1" style="margin-top: -35px;">
        <div class="col-md-12">
            <div style="display: flex; justify-content: end;">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#funcoes-clientes-center" style="width: 10%;">Cadastrar</button>
            </div>
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Lista de Clientes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 20%;"><input type="checkbox" value=""></th>
                            <td>Nome Completo</td>
                            <td>Telefone-Celular</td>
                            <td>E-mail</td>
                            <td>Última Compra</td>
                            <td>Ações</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 20%;"><input type="checkbox" value=""></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP POPUP-->
    <div class="modal bd-example-modal-lg" tabindex="-1" id="funcoes-clientes-center">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="text-decoration: underline;">Cadastro de cliente</h5>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#dados-clientes" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do
                        cliente</button>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#contato-clientes" style="font-size: 15px; margin: 5px;">Dados de
                        contato</button>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#endereco-clientes" style="font-size: 15px; margin: 5px;">Dados de
                        endereço</button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>

    <div class="modal bd-example-modal-lg" tabindex="-1" id="dados-clientes">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="text-decoration: underline;">Cadastro de cliente</h5>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#dados-clientes" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do
                        cliente</button>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#contato-clientes" style="font-size: 15px; margin: 5px;">Dados de
                        contato</button>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#endereco-clientes" style="font-size: 15px; margin: 5px;">Dados de
                        endereço</button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                Nome
                                <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
                            </div>
                            <div class="col-3">
                                Sobrenome
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome"
                                    id="sobrenome">
                            </div>
                            <div class="col-2">
                                Data nasc.
                                <input type="int" class="form-control" name="birthday" id="nascimento">
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

    <div class="modal bd-example-modal-lg" tabindex="-1" id="contato-clientes">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="text-decoration: underline;">Cadastro de cliente</h5>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#dados-clientes" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do
                        cliente</button>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#contato-clientes" style="font-size: 15px; margin: 5px;">Dados de
                        contato</button>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#endereco-clientes" style="font-size: 15px; margin: 5px;">Dados de
                        endereço</button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <input type="number" class="form-control" placeholder="Número" id="contato">
                        </div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example" id="tipoContato-fornecedor">
                                <option selected>Tipo de contato</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-info" onclick="incluirContato()">Incluir</button>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-3"><input type="checkbox" value=""></th>
                                    <th scope="col" class="col-4">Número</th>
                                    <th scope="col" class="col-5">Tipo de contato</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">--</th>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <div class="modal bd-example-modal-lg" tabindex="-1" id="endereco-clientes">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="text-decoration: underline;">Cadastro de cliente</h5>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#dados-clientes" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do
                        cliente</button>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#contato-clientes" style="font-size: 15px; margin: 5px;">Dados de
                        contato</button>
                    <button type="button" class="btn btn-secondary modals-options" data-bs-toggle="modal"
                        data-bs-target="#endereco-clientes" style="font-size: 15px; margin: 5px;">Dados de
                        endereço</button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 5px;">
                        <div class="col-2">
                            <label for="">CEP</label>
                        </div>
                        <div class="col-3">
                            <label for=""></label><br>
                        </div>
                    </div>
                    <div class="row" style="margin: 5px;">
                        <div class="col-2">
                            <input type="number" class="form-control" placeholder="_____-___" name="cep" id="cep">
                        </div>
                        <div class="col-4">
                            <input type="checkbox" id="endereco-preferencial">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px;">
                        <div class="col-3">
                            <input type="text" class="form-control" placeholder="Logradouro" name="logradouro"
                                id="logradouro">
                        </div>
                        <div class="col-2">
                            <input type="number" class="form-control" placeholder="n°" name="numero" id="numero">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" placeholder="Complemento" name="complemento"
                                id="complemento">
                        </div>
                    </div>
                    <div class="row" style="margin: 5px;">
                        <div class="col-3">
                            <input type="text" class="form-control" placeholder="Bairro" name="bairro" id="bairro">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" placeholder="Cidade" name="cidade" id="cidade">
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" placeholder="UF" name="uf" id="uf">
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-info" onclick="incluirEndereco()">Incluir</button>
                        </div>
                    </div>
                    <div class="row" style="margin: 5px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-3"><input type="checkbox" value=""></th>
                                    <th scope="col" class="col-4">CEP</th>
                                    <th scope="col" class="col-5">Endereço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">--</th>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
</main>

<?php include_once 'includes/footer.inc.php'; ?>