<?php $separarUrl = explode("/", $_SERVER['PHP_SELF']); ?>

<aside class="navbar navbar-titos">
        <div class="navbar-logo">
            <a href="index.php"><img src="assets/img/logo.png" alt="" class="logo"></a>
        </div>
        <hr>
        <nav class="navbar-titos-aside">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link <?php if($separarUrl[2] == 'dashboard.php') echo 'active'; ?>  nav-link-titos">
                        <ion-icon name="home-outline"></ion-icon>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a href="clientes.php" class="nav-link  <?php if($separarUrl[2] == 'clientes.php') echo 'active'; ?> nav-link-titos">
                        <ion-icon name="people-outline"></ion-icon>
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a href="fornecedores.php" class="nav-link  <?php if($separarUrl[2] == 'fornecedores.php') echo 'active'; ?> nav-link-titos">
                        <ion-icon name="storefront-outline"></ion-icon>
                        Fornecedores
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-titos">
                        <ion-icon name="receipt-outline"></ion-icon>
                        Pedidos
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-titos">
                        <ion-icon name="albums-outline"></ion-icon>
                        Categorias
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-titos">
                        <ion-icon name="beer-outline"></ion-icon>
                        Produtos
                    </a>
                </li>

                <li class="nav-item">
                    <a href="usuarios.php" class="nav-link  <?php if($separarUrl[2] == 'usuarios.php') echo 'active'; ?> nav-link-titos">
                        <ion-icon name="people-outline"></ion-icon>
                        Usuários
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-titos">
                        <ion-icon name="cog-outline"></ion-icon>
                        Configurações
                    </a>
                </li>

                <li class="nav-item">
                    <a href="api/controller/logout.php" class="nav-link nav-link-titos">
                        <ion-icon name="exit-outline"></ion-icon>
                        Sair
                    </a>
                </li>
            </ul>
        </nav>
    </aside>