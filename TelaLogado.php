<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Verifique se o caminho está correto -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Livraria</title>
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

    <!-- Carrossel de banners -->
    <div class="carousel-container">
        <div class="carousel">
            <img src="https://leitura.com.br/image/cache/catalog/Mar%C3%A7o-2025-1920x300-A-1920x300.jpg" alt="Banner 1" class="carousel-image">
            <img src="https://leitura.com.br/image/cache/catalog/1920x300%20Faro-1920x300.jpg" alt="Banner 2" class="carousel-image">
            <img src="https://leitura.com.br/image/cache/catalog/Banner-Leitura_Uma-vida-bela-1920x300.jpg" alt="Banner 3" class="carousel-image">
        </div>
    </div>

    <!-- Carrossel -->
    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.carousel-image');
        const carousel = document.querySelector('.carousel');

        function changeBanner() {
            currentIndex = (currentIndex + 1) % images.length;
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        setInterval(changeBanner, 10000);
        changeBanner();
    </script>

    <!-- Novos produtos -->
    <div class="container mt-2">
        <div class="row">

            <!-- Novos Produtos (Aside) -->
            <aside class="col-md-3">
                <div class="Main p-3 shadow-sm rounded border">
                    <h4 class="fw-bold border-bottom pb-2">Novos Produtos</h4>
                    <div class="mb-3 d-flex align-items-center border-bottom pb-2">
                        <img src="https://m.media-amazon.com/images/I/81h4CdNxdgL._SY385_.jpg" width="50" height="75" class="me-2">
                        <div>
                            <p class="mb-1 fw-bold">O PRÍNCIPE</p>
                            <p class="text-muted mb-0">R$ 50,00</p>
                        </div>
                    </div>
                    <div class="mb-3 d-flex align-items-center border-bottom pb-2">
                        <img src="https://m.media-amazon.com/images/I/51vXa1V2pbL._AC_UY218_.jpg" width="50" height="75" class="me-2">
                        <div>
                            <p class="mb-1 fw-bold">ELANTRIS</p>
                            <p class="text-muted mb-0">R$ 100,00</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="https://m.media-amazon.com/images/I/91jny5rWgES._AC_UY218_.jpg" width="50" height="75" class="me-2">
                        <div>
                            <p class="mb-1 fw-bold">O HOBBIT</p>
                            <p class="text-muted mb-0">R$ 25,00</p>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Conteúdo Principal (Section) -->
            <section class="col-md-9">
                <div class="p-3 shadow-sm rounded border">
                    <h4 class="fw-bold border-bottom pb-2">Os Mais Vendidos</h4>

                    <!-- Linha para organizar as imagens -->
                    <div class="row">
                        <!-- Produto 1 -->
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSIU0RenCFwpiIIabkwvUKTiiUoaDyuknUd3ir7gOmfOGr6KqetyWsurOmWXMykUwY61qD1eML2f7myyT6LIBM7DJ0QXNkppCJxVte4L00&usqp=CAc" class="rounded" alt="Dom Casmurro" style="width: 200px;">
                            <div class="mt-2">
                                <p class="fw-bold">Dom Casmurro</p>
                                <p class="text-muted">R$ 50,00</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn btn-outline-warning" role="button">Adicionar</button>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 2 -->
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://m.media-amazon.com/images/I/81FiZi-CWHL._AC_UL320_.jpg" class="rounded" alt="Steve Jobs" style="width: 200px;">
                            <div class="mt-2">
                                <p class="fw-bold">Steve Jobs</p>
                                <p class="text-muted">R$ 60,00</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn btn-outline-warning" role="button">Adicionar</button>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 3 -->
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://m.media-amazon.com/images/I/715JOcuqSSL._AC_UL320_.jpg" class="rounded" alt="A Metamorfose" style="width: 213px;">
                            <div class="mt-2">
                                <p class="fw-bold">A Metamorfose</p>
                                <p class="text-muted">R$ 70,00</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn btn-outline-warning" role="button">Adicionar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Linha para os novos produtos -->
                    <div class="row">
                        <!-- Produto 4 -->
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://m.media-amazon.com/images/I/41gRUYE71QL._SX342_SY445_.jpg" class="rounded" alt="O hospital - Com brinde" style="width: 239px;">
                            <div class="mt-2">
                                <p class="fw-bold">O hospital - Com brinde</p>
                                <p class="text-muted">R$ 59,90</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn btn-outline-warning" role="button">Adicionar</button>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 5 -->
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://m.media-amazon.com/images/I/41Kzq1h5NOL._SY445_SX342_.jpg" class="rounded" alt="Nunca Minta" style="width: 205px;">
                            <div class="mt-2">
                                <p class="fw-bold">Nunca Minta</p>
                                <p class="text-muted">R$ 80,00</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn btn-outline-warning" role="button">Adicionar</button>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 6 -->
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://m.media-amazon.com/images/I/71mGOLyagdL._SY466_.jpg" class="rounded" alt="Uma Vida Bela" style="width: 194px;">
                            <div class="mt-2">
                                <p class="fw-bold">Uma Vida Bela</p>
                                <p class="text-muted">R$ 65,00</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn btn-outline-warning" role="button">Adicionar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="LivrosLogado.php" class="btn btn-outline-warning" role="button">Mais Livros</a>
                </div>
            </section>
        </div>
    </div>

    <!-- Banner -->
    <br>
    <div style="width: 1558px; height: 392px; position: relative; border-radius: 20px; background-color: white; border: 1px solid black;">
        <img src="https://www.editorairacema.com.br/wp-content/uploads/2022/07/editora-Iracema-banner-09.jpg" 
             alt="Banner da Editora" 
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 20px;">
        <div style="width: 613px; height: 91px; left: 66px; top: 80px; position: absolute; justify-content: center; display: flex; flex-direction: column; color: #253D4E; font-size: 40px; font-family: Quicksand; font-weight: 700; line-height: 48px; word-wrap: break-word; z-index: 1;">
            Fique por dentro das novidades! Cadastre seu e-mail e receba promoções imperdíveis.
        </div>
        <input type="text" placeholder="Digite seu nome" style="position: absolute; left: 66px; top: 200px; width: 400px; height: 40px; padding: 10px; border-radius: 10px; border: 1px solid #ccc; font-size: 16px; z-index: 1;">
        <button type="button" style="position: absolute; left: 476px; top: 200px; width: 180px; height: 40px; background-color: #FFA500; color: white; font-size: 16px; border-radius: 10px; border: none; font-family: Quicksand; font-weight: 700; z-index: 1;">Inscrever-se</button>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted" style="background-color: #D3D3D3; width: 100%;">
        <section>
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <a href="main.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Saraiva_logo.svg/2560px-Saraiva_logo.svg.png" alt="Logo da Empresa" style="max-width: 100px; height: auto; margin-bottom: 22px;"></a>
                        <p>
                            Loja especializada em venda de livros<br>
                            Av. Senador Vergueiro - 400 São Bernardo do Campo - SP<br>
                            Email: senacsbcsp@hotmail.com<br>
                            © 2025, Saraiva - HTML E-commerce Template<br>
                            Todos os direitos reservados
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Conta</h6>
                        <p><a href="TelaLogin.php" class="text-reset">Login</a></p>
                        <p><a href="TelaRegistrarse.php" class="text-reset">Criar Conta</a></p>
                        <p><a href="#" class="text-reset">Meu Carrinho</a></p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Livros</h6>
                        <p><a href="LivrosLogado.php" class="text-reset">Todos os Livros</a></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

</body>

</html>
