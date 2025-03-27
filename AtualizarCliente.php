<?php 
    namespace PHP\Modelo;
    require_once('DAO/Conexao.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Desabilitar.php');
    require_once('DAO/Inserir.php');
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Desabilitar;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
    $inserir = new Inserir();
    $desabilitar = new Desabilitar();
    $atualizar = new Atualizar();
    $conexao = new Conexao();
    $consultar = new Consultar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Verifique se o caminho está correto -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Atualizar Cliente</title>
    <style>
        .form-container {
            width: 50%;
            margin: 0 auto;
            padding-top: 100px;
        }
        .form-label {
            font-weight: bold;
        }
        .text-center-custom {
            text-align: center;
        }
    </style>
</head>
<body>

 <!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="TelaLogado.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Saraiva_logo.svg/2560px-Saraiva_logo.svg.png" alt="Logo" style="width: 250px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="TelaLogado.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LivrosLogado.php">Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SobreNosLogado.php">Sobre-nós</a>
                </li>
                <!-- Submenu Dropdown para Admin -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAdmin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownAdmin">
                        <!-- Submenu Pedido -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Pedidos</a>
                            <ul class="dropdown-menu">
                                <!-- Novo item Consultar -->
                                <li><a class="dropdown-item" href="ConsultarPedidos.php">Consultar</a></li>
                                <!-- Outros itens existentes -->

                            </ul>
                        </li>
                        <!-- Submenu Cliente -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Cliente</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ConsultarCliente.php">Consultar</a></li>
                                <li><a class="dropdown-item" href="AtualizarCliente.php">Atualizar</a></li>
                                <li><a class="dropdown-item" href="DesabilitarCliente.php">Desabilitar</a></li>
                            </ul>
                        </li>
                       
                        <!-- Submenu Livros -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Livros</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="CadastrarLivros.php">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="ConsultarLivro.php">Consultar</a></li>
                                <li><a class="dropdown-item" href="AtualizarLivro.php">Atualizar</a></li>
                                <li><a class="dropdown-item" href="DesabilitarLivros.php">Desabilitar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>   
            <form class="d-flex ms-0" role="search">
                <input class="form-control me-1" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="width: 400px;">
                <button class="btn btn-outline-success ms-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
</nav>



<!-- CSS Adicional para Suporte aos Submenus -->
<style>
/* CSS Adicional para Suporte aos Submenus */
.dropdown-menu .dropdown-menu {
    margin-left: 0;  /* Remover o deslocamento da esquerda */
    margin-top: 0;   /* Remover o deslocamento do topo */
    position: absolute;
    top: 0;
    left: 100%;      /* Posicionar o submenu à direita do item pai */
}

.dropdown-submenu:hover > .dropdown-menu {
    display: block;
    position: absolute; /* Assegura que o submenu fique em relação ao item pai */
    left: 100%;         /* Posiciona à direita do item pai */
    top: 0;             /* Ajuste vertical caso necessário */
}
</style>

    <!-- Tela Atualizar Cliente -->
    <div class="container form-container">
        <h1 class="text-center-custom">Atualizar Cliente</h1><br>

        <!-- Formulário para atualizar cliente -->
        <form class="form-control form-control-sm" method="POST">
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Digite o código do cliente</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="idCliente" required>
            </div>

            <div class="mb-3">
                <select name="campos" class="form-select" aria-label="Escolha o campo para atualizar">
                    <option selected>Escolha um campo para atualizar</option>
                    <option value="nome">Nome</option>
                    <option value="endereco">Endereço</option>
                    <option value="telefone">Telefone</option>
                    <option value="dataNascimento">Data de Nascimento</option>
                    <option value="loginn">Login</option>
                    <option value="senha">Senha</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="novoDado" class="form-label">Novo Dado</label>
                <input type="text" class="form-control" id="novoDado" name="novoDado" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>

        <!-- Processamento do formulário -->
        <?php
        if (isset($_POST['idCliente']) && $_POST['idCliente'] != "" && isset($_POST['campos']) && $_POST['campos'] != "" && isset($_POST['novoDado']) && $_POST['novoDado'] != "") {
            $atualizar->atualizarCliente($conexao, $_POST['campos'], $_POST['novoDado'], $_POST['idCliente']);
            echo '<div class="alert alert-success mt-3">Cliente atualizado com sucesso!</div>';
        }
        ?>

    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted" style="background-color: #D3D3D3; width: 100%; padding-top: 50px;">
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <a href="main.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Saraiva_logo.svg/2560px-Saraiva_logo.svg.png" alt="Logo da Empresa" style="max-width: 100px; height: auto; margin-bottom: 22px;">
                        <p></a>
                            Loja especializada em venda de livros
                            Av. Senador Vergueiro - 400 São Bernardo do Campo - SP
                            Email: senacsbcsp@hotmail.com
                            © 2025, Saraiva - HTML E-commerce Template
                            Todos os direitos reservados
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Conta</h6>
                        <p><a href="TelaLogin.php" class="text-reset">Login</a></p>
                        <p><a href="TelaRegistrarse.php" class="text-reset">Criar Conta</a></p>
                        <p><a href="TelaLogado.php" class="text-reset">Meu Carrinho</a></p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Livros</h6>
                        <p><a href="Livros.php" class="text-reset">Todos os Livros</a></p>
                    </div>
                    <!-- Grid column -->
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer -->

</body>
</html>
