<?php $nomePagina = 'Gestão de Fornecedores';
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
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#funcoes-fornecedores-center" style="width: 17%;">Cadastrar Fornecedor</button>
              </div>
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Lista de Fornecedores</th>
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
        <div class="modal bd-example-modal-lg" tabindex="-1" id="funcoes-fornecedores-center" >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="text-decoration: underline;">Cadastro de Fornecedor</h5>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#dados-fornecedor" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do fornecedor</button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contato-fornecedor" style="font-size: 15px; margin: 5px;">Dados de contato</button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#endereco-fornecedor" style="font-size: 15px; margin: 5px;">Dados de endereço</button>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
            </div>
          </div>
        </div>
      
        <div class="modal bd-example-modal-lg" tabindex="-1" id="dados-fornecedor">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="text-decoration: underline;">Cadastro de Fornecedor</h5>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#dados-fornecedor" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do fornecedor</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contato-fornecedor" style="font-size: 15px; margin: 5px;">Dados de contato</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#endereco-fornecedor" style="font-size: 15px; margin: 5px;">Dados de endereço</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Nome do responsável" id="nome-fornecedor">
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Sobrenome do responsável" id="sobrenome-fornecedor">
                    </div>
                    <div class="col-2">
                      <select name="gender" id="genero-fornecedor">
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                      </select>
                    </div>
                    <div class="col-2">
                      Data de fundação
                      <input type="date" class="form-control" id="fundacao-fornecedor">
                    </div>
                  </div>
                  <div class="row" style="margin-top: 5px;">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Razão Social" id="razao-fornecedor">
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Nome Fantasia" id="fantasia-fornecedor">
                    </div>
                  </div>
                  <div class="row" style="margin-top: 5px;">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="CNPJ" id="cnpj-fornecedor">
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="I.E." id="ie-fornecedor">
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="I.M." id="im-fornecedor">
                    </div>
                    <div class="col-3">
                      <!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" id="isento-im"> -->
                      <input type="checkbox" id="isento-im">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Isento I.M.
                      </label>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success" onclick="cadastrarFornecedor()">Cadastar Fornecedor</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal bd-example-modal-lg" tabindex="-1" id="contato-fornecedor" >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="text-decoration: underline;">Cadastro de Fornecedor</h5>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#dados-fornecedor" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do fornecedor</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contato-fornecedor" style="font-size: 15px; margin: 5px;">Dados de contato</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#endereco-fornecedor" style="font-size: 15px; margin: 5px;">Dados de endereço</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
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
                </form>
              </div>
              <div class="modal-footer"></div>
            </div>
          </div>
        </div>

        <div class="modal bd-example-modal-lg" tabindex="-1" id="endereco-fornecedor" >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="text-decoration: underline;">Cadastro de Fornecedor</h5>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#dados-fornecedor" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do fornecedor</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contato-fornecedor" style="font-size: 15px; margin: 5px;">Dados de contato</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#endereco-fornecedor" style="font-size: 15px; margin: 5px;">Dados de endereço</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="row" style="margin: 5px;">
                    <div class="col-2">
                      <label for="">CEP</label>
                    </div>
                    <div class="col-3">
                      <label for="">Endereço Preferencial</label><br>
                    </div>
                  </div>
                  <div class="row" style="margin: 5px;">
                    <div class="col-2">
                      <input type="number" class="form-control" placeholder="_____-___" id="cep">
                    </div>
                    <div class="col-4">
                    <input type="checkbox" id="endereco-preferencial">
                    </div>
                  </div>
                  <div class="row" style="margin: 5px;">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Logradouro" id="logradouro">
                    </div>
                    <div class="col-2">
                      <input type="number" class="form-control" placeholder="n°" id="numero">
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Complemento" id="complemento">
                    </div>
                  </div>
                  <div class="row" style="margin: 5px;">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Bairro" id="bairro">
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Cidade" id="cidade">
                    </div>
                    <div class="col-2">
                      <input type="text" class="form-control" placeholder="UF" id="uf">
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
                </form>
              </div>
              <div class="modal-footer"></div>
            </div>
          </div>
        </div>
    </main>

<?php include_once 'includes/footer.inc.php'; ?>  