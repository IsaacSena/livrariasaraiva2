<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

    <!-- Seção de Livros -->
    <section class="container mt-5 pt-5">
        <h2 class="text-center">Todos os Livros</h2>
        <div class="row" id="livrosContainer"></div>
    </section>

    <!-- Seção de Finalizar Compra -->
    <section id="finalizarCompra" class="container mt-5" style="display: none;">
        <h2 class="text-center">Finalizar Compra</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h4 class="mb-3">Resumo do Pedido</h4>
                    <div class="d-flex align-items-center mb-3">
                        <img id="livroImagem" src="" alt="Livro" width="80">
                        <div class="ms-3">
                            <p class="fw-bold mb-1" id="livroNome"></p>
                            <p class="text-muted">Preço Unitário: R$ <span id="livroPreco"></span></p>
                        </div>
                    </div>

                    <label for="quantidade">Quantidade:</label>
                    <input type="number" id="quantidade" class="form-control mb-3" value="1" min="1" onchange="atualizarTotal()">

                    <div class="d-flex justify-content-between">
                        <strong>Total:</strong>
                        <strong>R$ <span id="livroTotal"></span></strong>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h4 class="mb-3">Endereço de Entrega</h4>
                    <form>
                        <input type="text" class="form-control mb-3" placeholder="Nome Completo" required>
                        <input type="text" class="form-control mb-3" placeholder="Endereço" required>
                        <input type="text" class="form-control mb-3" placeholder="Cidade" required>
                        <input type="text" class="form-control mb-3" placeholder="CEP" required>
                        <h4 class="mt-4">Forma de Pagamento</h4>
                        <select class="form-select mb-3" required>
                            <option disabled selected>Selecione o método</option>
                            <option>Cartão de Crédito</option>
                            <option>Pix</option>
                            <option>Boleto Bancário</option>
                        </select>
                        <button type="submit" class="btn btn-success w-100">Finalizar Compra</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Lista completa de livros (com os 4 que estavam faltando)
        const livros = [
            { nome: "Dom Casmurro", preco: "50.00", imagem: "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSIU0RenCFwpiIIabkwvUKTiiUoaDyuknUd3ir7gOmfOGr6KqetyWsurOmWXMykUwY61qD1eML2f7myyT6LIBM7DJ0QXNkppCJxVte4L00&usqp=CAc" },
            { nome: "Steve Jobs", preco: "60.00", imagem: "https://m.media-amazon.com/images/I/81FiZi-CWHL._AC_UL320_.jpg" },
            { nome: "A Metamorfose", preco: "70.00", imagem: "https://m.media-amazon.com/images/I/715JOcuqSSL._AC_UL320_.jpg" },
            { nome: "O hospital", preco: "59.90", imagem: "https://m.media-amazon.com/images/I/41gRUYE71QL._SX342_SY445_.jpg" },
            { nome: "Nunca Minta", preco: "80.00", imagem: "https://m.media-amazon.com/images/I/41Kzq1h5NOL._SY445_SX342_.jpg" },
            { nome: "O Hobbit", preco: "120.00", imagem: "https://m.media-amazon.com/images/I/91wfHwESyfL._SY425_.jpg" },
            { nome: "O Príncipe", preco: "90.00", imagem: "https://m.media-amazon.com/images/I/81h4CdNxdgL._SY385_.jpg" },
            { nome: "Elantris", preco: "75.00", imagem: "https://m.media-amazon.com/images/I/51vXa1V2pbL._SY385_.jpg" },
            { nome: "Tempo de Reacender as Estrelas", preco: "12.00", imagem: "https://m.media-amazon.com/images/I/81ikOn7GfzL._SY425_.jpg" },
            { nome: "As Pequenas Alegrias", preco: "20.00", imagem: "https://m.media-amazon.com/images/I/71gurd1XuPL._SY425_.jpg" },
            { nome: "O que Resta de Nós", preco: "25.00", imagem: "https://m.media-amazon.com/images/I/714y-8S0-RL._SY425_.jpg" },
            { nome: "Uma Vida Bela", preco: "65.00", imagem: "https://m.media-amazon.com/images/I/71mGOLyagdL._SY466_.jpg" }
        ];

        const livrosContainer = document.getElementById("livrosContainer");

        // Adiciona os livros dinamicamente no HTML
        livros.forEach(livro => {
            const livroHTML = `
                <div class="col-md-4 text-center mb-3">
                    <img src="${livro.imagem}" class="rounded" alt="${livro.nome}" style="width: 200px;">
                    <p class="fw-bold">${livro.nome}</p>
                    <p class="text-muted">R$ ${livro.preco}</p>
                    <button class="btn btn-outline-warning adicionar-btn" 
                        data-nome="${livro.nome}" 
                        data-preco="${livro.preco}" 
                        data-imagem="${livro.imagem}">
                        Adicionar
                    </button>
                </div>
            `;
            livrosContainer.innerHTML += livroHTML;
        });

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".adicionar-btn").forEach(botao => {
                botao.addEventListener("click", function () {
                    document.getElementById("livroNome").textContent = this.getAttribute("data-nome");
                    document.getElementById("livroPreco").textContent = this.getAttribute("data-preco");
                    document.getElementById("livroImagem").src = this.getAttribute("data-imagem");

                    document.getElementById("quantidade").value = 1;
                    atualizarTotal();

                    document.getElementById("finalizarCompra").style.display = "block";
                    window.scrollTo({ top: document.getElementById("finalizarCompra").offsetTop, behavior: "smooth" });
                });
            });
        });

        function atualizarTotal() {
            let preco = parseFloat(document.getElementById("livroPreco").textContent);
            let qtd = parseInt(document.getElementById("quantidade").value);
            document.getElementById("livroTotal").textContent = (preco * qtd).toFixed(2);
        }
    </script>

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
