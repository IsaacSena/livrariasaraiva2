<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Verifique se o caminho está correto -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sobre Nós - Livraria Saraiva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Container principal */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Estilo do título da seção */
        h1 {
            text-align: center;
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        /* Container do Sobre com a imagem e o texto */
        .about-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 20px;
        }

        /* Imagem do banner */
        .about-image {
            width: 100%;  /* A imagem ocupa 100% da largura disponível */
            max-width: 1000px; /* Limita a largura da imagem para um tamanho máximo */
            height: auto;  /* Mantém a proporção da imagem */
            margin-bottom: 30px;
            border-radius: 8px;
        }

        /* Texto do Sobre Nós */
        .about-text {
            width: 100%;   /* A largura do texto ocupa 100% da largura disponível */
            max-width: 1000px; /* Limita a largura do texto para um tamanho máximo */
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
            margin: 0 auto;  /* Garante que o texto ficará centralizado */
        }
    </style>
</head>
<body>
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
            </ul>
            <form class="d-flex ms-0" role="search">
                <input class="form-control me-1" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="width: 400px;">
                <button class="btn btn-outline-success ms-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
</nav>

    <!--fim da navbar-->

    <div class="container">
        
        
        <!-- Seção com a imagem e o texto -->
        <div class="about-section">
            <img src="https://newtrade.com.br/wp-content/uploads/2018/10/livraria-saraiva-31-10-2018.jpg" alt="Livraria Saraiva" class="about-image">
            <h1>Sobre a Livraria Saraiva</h1>
            
            <!-- Texto do Sobre Nós -->
            <div class="about-text">
                <p>A <strong>Livraria Saraiva</strong> é uma das maiores redes de livrarias do Brasil, com mais de 100 anos de história. Fundada em 1914 por <strong>Raul Saraiva</strong>, a Saraiva começou como uma pequena livraria em São Paulo e, ao longo dos anos, se expandiu para se tornar uma das mais tradicionais e reconhecidas do país.</p>
                <p>Nosso compromisso sempre foi levar a cultura, o conhecimento e o prazer pela leitura a milhões de brasileiros. Com uma vasta variedade de livros, desde lançamentos de best-sellers até títulos clássicos, a Saraiva se consolidou como referência no mercado editorial, oferecendo uma experiência de compra única, tanto nas lojas físicas quanto no e-commerce.</p>
                <p>Além de livros, a Livraria Saraiva oferece uma série de produtos relacionados à cultura e entretenimento, como filmes, música, games e tecnologia. Estamos sempre em busca de inovação, trazendo as melhores soluções de compra online e uma plataforma digital de alta qualidade.</p>
                <p>Nosso time é apaixonado por livros e se dedica a proporcionar aos nossos clientes uma experiência única de compra e descoberta, seja na nossa loja, seja no conforto de suas casas.</p>

                <h3>Missão:</h3>
                <p>Promover o acesso à cultura, ao conhecimento e à diversão, oferecendo aos nossos clientes uma ampla gama de produtos de qualidade com um excelente atendimento.</p>

                <h3>Visão:</h3>
                <p>Ser a maior e mais confiável plataforma de cultura e entretenimento do Brasil, reconhecida por sua excelência no atendimento e pela experiência enriquecedora que oferece aos seus clientes.</p>

                <h3>Valores:</h3>
                <ul>
                    <li><strong>Cultura e Conhecimento</strong></li>
                    <li><strong>Inovação e Qualidade</strong></li>
                    <li><strong>Atendimento ao Cliente</strong></li>
                    <li><strong>Respeito e Responsabilidade Social</strong></li>
                </ul>

                <p>Estamos aqui para ajudá-lo a encontrar o livro perfeito, o presente ideal ou o produto de entretenimento que vai transformar o seu dia. Explore nossas opções e descubra um mundo de possibilidades com a <strong>Livraria Saraiva</strong>.</p>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start text-muted" style="background-color: #D3D3D3; width: 100%;">

  
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <a href="TelaLogado.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Saraiva_logo.svg/2560px-Saraiva_logo.svg.png"  alt="Logo da Empresa" style="max-width: 100px; height: auto; margin-bottom: 22px;">
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
            <a href="" class="text-reset">Meu Carrinho</a>
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Livros
          </h6>
          <p>
            <a href="LivrosLogado.php" class="text-reset">Todos os Livros</a>
          </p>
        </div>
      </div>
    </div>
  </section>
</footer>
<!-- Footer -->

</body>
</html>
