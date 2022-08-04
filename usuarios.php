<?php $nomePagina = "Gestão de Usuários"; 
include_once("includes/head.inc.php");
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
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#funcoes-usuarios-center" style="width: 15%;">Cadastrar Usuário</button>
              </div>
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Lista de Usuários</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row" style="width: 20%;"><input type="checkbox" value=""></th>
                            <td>Nome</td>
                            <td>Login</td>
                            <td>E-mail</td>
                            <td>Último Acesso</td>
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
        <div class="modal bd-example-modal-lg" tabindex="-1" id="funcoes-usuarios-center" >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="text-decoration: underline;">Cadastro de Usuário</h5>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#dados-usuarios" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do usuário</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contato-usuarios" style="font-size: 15px; margin: 5px;">Dados de contato</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#permissoes-usuarios" style="font-size: 15px; margin: 5px;">Permissões</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"></div>
            </div>
          </div>
        </div>
      
        <div class="modal bd-example-modal-lg" tabindex="-1" id="dados-usuarios">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="text-decoration: underline;">Cadastro de Usuário</h5>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#dados-usuarios" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do usuário</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contato-usuarios" style="font-size: 15px; margin: 5px;">Dados de contato</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#permissoes-usuarios" style="font-size: 15px; margin: 5px;">Permissões</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Nome" id="nome">
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Sobrenome" id="sobrenome">
                    </div>
                    <div class="col-2">
                      <select name="gender" id="genero">
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        </select>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-2">
                      Data nasc.  
                      <input type="date" class="form-control" id="data-nasc">
                    </div>
                  </div>
                  <div class="row" style="margin-top: 5px;">
                    <div class="col-3">
                      <input type="text" class="form-control" placeholder="Login" id="login">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" onclick="cadastrarUsuario()">Cadastar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal bd-example-modal-lg" tabindex="-1" id="contato-usuarios" >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="text-decoration: underline;">Cadastro de Usuário</h5>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#dados-usuarios" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do usuário</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contato-usuarios" style="font-size: 15px; margin: 5px;">Dados de contato</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#permissoes-usuarios" style="font-size: 15px; margin: 5px;">Permissões</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-4">
                      <input type="number" class="form-control" placeholder="Número/E-mail" id="contato">
                    </div>
                    <div class="col-4">
                      <select class="form-select" aria-label="Default select example" id="tipo-contato">
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

        <div class="modal bd-example-modal-lg" tabindex="-1" id="permissoes-usuarios" >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="text-decoration: underline;">Cadastro de Usuário</h5>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#dados-usuarios" style="font-size: 15px; margin: 0 5px 0px 30px;">Dados do usuário</button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contato-usuarios" style="font-size: 15px; margin: 5px;">Dados de contato</button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#permissoes-usuarios" style="font-size: 15px; margin: 5px;">Permissões</button>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-4">
                        <select class="form-select" aria-label="Default select example" id="modulo">
                          <option selected>Módulo</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                      <div class="col-4">
                        <select class="form-select" aria-label="Default select example" id="permissao">
                          <option selected>Tipo de permissão</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                      <div class="col-2">
                        <button type="button" class="btn btn-info" onclick="incluirPermissoes()">Incluir</button>
                      </div>
                    </div>
                    <div class="row">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" class="col-3"><input type="checkbox" value=""></th>
                            <th scope="col" class="col-4">Módulo</th>
                            <th scope="col" class="col-5">Tipo de permissão</th>
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

<?php include_once("includes/footer.inc.php");?> 