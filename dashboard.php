<?php $nomePagina = 'Dashboard';
include_once 'includes/head.inc.php';
include_once('api/controller/validation-cookie.php');
?> 

    <main>
        <button id="testebutao"><h1>CLICA EM MIM TESTANDO</h1></button>
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 50px;">
            <h5 class="titos-title"><?= $nomePagina ?></h5>

            <a href="#" class="nav-link nav-link-user">
                <ion-icon name="person-circle-outline"></ion-icon>
                Olá, Usuário!
            </a>
        </div>
        
        <div class="row me-1">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header-titos bg-orders">
                        <ion-icon name="calendar-number-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title card-title-titos">Total de Pedidos</h5>
                        <p class="card-description">0</p>
                        <p class="card-description">Hoje</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header-titos bg-orders-week">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title card-title-titos">Total de Pedidos</h5>
                        <p class="card-description">0</p>
                        <p class="card-description">Semana</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header-titos bg-cash-week">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title card-title-titos">Total em R$</h5>
                        <p class="card-description">0</p>
                        <p class="card-description">Semana</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header-titos bg-cash-month">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title card-title-titos">Total em R$</h5>
                        <p class="card-description">0</p>
                        <p class="card-description">Mês</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row me-1" style="margin-top: 35px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-mesas-titos bg-tables">
                        <ion-icon name="storefront-outline"></ion-icon>
                        <span>Mesas salão</span>
                    </div>
                    <div class="card-body mt-5">
                        <div class="row card-body-mesas-titos my-2">
                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 001</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 002</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 003</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 004</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row card-body-mesas-titos my-2">
                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 001</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 002</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 003</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 004</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row card-body-mesas-titos my-2">
                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 001</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 002</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 003</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 004</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row card-body-mesas-titos my-2">
                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 001</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 002</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 003</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-tables" data-bs-toggle="modal" data-bs-target="#tables-views">
                                <div class="card">
                                    <div class="card-body card-body-table">
                                        <div class="config-table">
                                            <ion-icon name="wine-outline"></ion-icon>
                                            <div class="tables">
                                                <span>Mesa: 004</span>
                                                <span>Tempo: 00:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-pedidos-titos bg-forders">
                        <ion-icon name="document-text-outline"></ion-icon>
                        Pedidos na fila
                    </div>
                    <div class="card-body mt-5">
                        <ul class="list-group">
                            <li class="list-group-item list-orders text-danger" data-bs-toggle="modal" data-bs-target="#orders-view">
                                <ion-icon name="alarm-outline"></ion-icon>
                                <div class="orders-item">
                                    <h5>Nº 000</h5>
                                    <span>Atrasado</span>
                                </div>
                                <div class="orders-item-time">
                                    00:00
                                    <ion-icon name="alarm-outline"></ion-icon>
                                </div>
                            </li>

                            <li class="list-group-item list-orders text-primary" data-bs-toggle="modal" data-bs-target="#orders-view">
                                <ion-icon name="cafe-outline"></ion-icon>
                                <div class="orders-item">
                                    <h5>Nº 003</h5>
                                    <span>Pedido em preparo</span>
                                </div>
                                <div class="orders-item-time">
                                    00:00
                                    <ion-icon name="alarm-outline"></ion-icon>
                                </div>
                            </li>

                            <li class="list-group-item list-orders text-info" data-bs-toggle="modal" data-bs-target="#orders-view">
                                <ion-icon name="bicycle-outline"></ion-icon>
                                <div class="orders-item">
                                    <h5>Nº 002</h5>
                                    <span>Pedido em transporte</span>
                                </div>
                                <div class="orders-item-time">
                                    00:00
                                    <ion-icon name="alarm-outline"></ion-icon>
                                </div>
                            </li>

                            <li class="list-group-item list-orders text-success" data-bs-toggle="modal" data-bs-target="#orders-view">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                                <div class="orders-item">
                                    <h5>Nº 001</h5>
                                    <span>Finalizado</span>
                                </div>
                                <div class="orders-item-time">
                                    00:00
                                    <ion-icon name="alarm-outline"></ion-icon>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal modal-titos" tabindex="-1" id="tables-views">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mesa 001 | Tempo 00:00</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Detalhes do consumo
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Fechar mesa</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="orders-view">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pedido Nº 001</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Detalhes do Pedido</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Mudar status</button>
                <button type="button" class="btn btn-danger">Editar</button>
                <button type="button" class="btn btn-success">Finalizar</button>
            </div>
          </div>
        </div>
    </div>

<?php include_once 'includes/footer.inc.php'; ?> 