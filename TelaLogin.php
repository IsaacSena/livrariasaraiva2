<?php 
    namespace PHP\Modelo;
    require_once('DAO/Conexao.php');
    require_once('DAO/Consultar.php');
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;

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
    <title>Login</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Saraiva_logo.svg/2560px-Saraiva_logo.svg.png" alt="Logo" style="width: 250px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Livros.php">Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SobreNos.php">Sobre-nós</a>
                </li>
            </ul>
            <form class="d-flex ms-0" role="search">
                <input class="form-control me-1" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="width: 400px;">
                <button class="btn btn-outline-success ms-0" type="submit">Pesquisar</button>
                <button class="btn btn-outline-primary ms-3" type="button" onclick="window.location.href='TelaLogin.php'">Login</button>
                <button class="btn btn-outline-secondary ms-2" type="button" onclick="window.location.href='TelaRegistrarse.php'">Criar Conta</button>
            </form>
        </div>
    </div>
</nav>

    <!--fim da navbar-->

    <div class="login-container">
      <h2>Login</h2>
      <form method = "POST">
          <label for="username">Login:</label>
          <input type="text" id="username" name="loginn" placeholder="Digite seu login" required>
  
          <label for="password">Senha:</label>
          <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
  
          <div class="remember-me">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">Lembrar-se de mim</label>
          </div>
          <button type="submit" class="login-btn">Logar

          <?php
          if ((isset($_POST['loginn'])&& $_POST['loginn'] != "" && $_POST['senha'] && $_POST['senha'] != "")) {
             $consultar->consultarLogin($conexao,$_POST['loginn'],$_POST['senha']);
          }
         
          ?>
          </button>

          <!--<a href="TelaLogado.php" button type="submit" class="login-btn" style = "text-align: center;">Logar</a>-->
          <div class="create-account">
              <p>Não tem conta? <a href="TelaRegistrarse.php">Criar conta</a></p>
          </div>
      </form>
  </div>
  <br><br>

  <footer class="text-center text-lg-start text-muted" style="background-color: #D3D3D3; width: 100%;">

  
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <a href="main.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Saraiva_logo.svg/2560px-Saraiva_logo.svg.png"  alt="Logo da Empresa" style="max-width: 100px; height: auto; margin-bottom: 22px;">
          <p></a>
            Loja especializada em venda de livros
            Av.Senador Vergueiro - 400  São Bernardo do Campo - SP
            Email:senacsbcsp@hotmail.com
            © 2025,Saraiva - HTML E-commerce Template
            Todos os direitos reservados
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Conta
          </h6>
          <p>
            <a href="TelaLogin.php" class="text-reset">Login</a>
          </p>
          <p>
            <a href="TelaRegistrarse.php" class="text-reset">Criar Conta</a>
          </p>
          <p>
            <a href="TelaLogado.php" class="text-reset">Meu Carrinho</a>
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Livros
          </h6>
          <p>
            <a href="Livros.php" class="text-reset">Todos os Livros</a>
          </p>
        </div>
      </div>
    </div>
  </section>
</footer>
<!-- Footer -->
</body>
</html>
