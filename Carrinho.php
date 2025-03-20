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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Finalizar Compra</h2>
        <hr>

        <!-- Formulário de Finalização de Compra -->
        <form action="processar_compra.php" method="POST">
            <!-- Informações do Cliente -->
            <div class="mb-3">
                <label for="nome" class="form-label"><strong>Nome do Cliente:</strong></label>
                <input type="text" class="form-control" id="nome" name="nome" value="" readonly>
            </div>
            
            <div class="mb-3">
                <label for="endereco" class="form-label"><strong>Endereço do Cliente:</strong></label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="" readonly>
            </div>

            <!-- Informações do Pedido -->
            <div class="mb-3">
                <label for="titulo" class="form-label"><strong>Título do Livro:</strong></label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="" readonly>
            </div>
            
            <div class="mb-3">
                <label for="precoLivro" class="form-label"><strong>Preço do Livro:</strong></label>
                <input type="text" class="form-control" id="precoLivro" name="precoLivro" value="" readonly>
            </div>

            <!-- Quantidade do Livro (Somente editável) -->
            <div class="mb-3">
                <label for="quantidade" class="form-label"><strong>Quantidade:</strong></label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" min="1" value="1" required>
            </div>
            
            <div class="mb-3">
                <label for="precoTotal" class="form-label"><strong>Preço Total do Pedido:</strong></label>
                <input type="text" class="form-control" id="precoTotal" name="precoTotal" value="" readonly>
            </div>
            
            <div class="mb-3">
                <label for="pagamento" class="form-label"><strong>Forma de Pagamento:</strong></label>
                <select class="form-select" id="pagamento" name="pagamento" required>
                    <option value="Cartão de Crédito">Cartão de Crédito</option>
                    <option value="Boleto">Boleto</option>
                    <option value="Pix">Pix</option>
                </select>
            </div>

            <!-- Botão para confirmar a compra -->
            <button type="submit" class="btn btn-success w-100">Confirmar Compra</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Script para calcular o preço total automaticamente com base na quantidade
        document.getElementById('quantidade').addEventListener('input', function() {
            let precoLivro = parseFloat(document.getElementById('precoLivro').value);
            let quantidade = parseInt(this.value);
            if (!isNaN(precoLivro) && !isNaN(quantidade)) {
                let precoTotal = precoLivro * quantidade;
                document.getElementById('precoTotal').value = precoTotal.toFixed(2);
            }
        });
    </script>
</body>
</html>
