<?php
// Classe de Conexão ao Banco de Dados
class Conexao {
    private $host = 'localhost';
    private $user = 'root'; // Atualize com o seu usuário
    private $password = ''; // Atualize com a sua senha
    private $database = 'saraiva';
    public $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Falha na conexão: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}

// Variáveis
$nome = '';
$endereco = '';
$tituloLivro = 'Dom Casmurro'; // Título fixo para este exemplo
$precoLivro = 50.00; // Preço fixo para o exemplo
$quantidade = 1; // Quantidade inicial padrão
$precoTotal = $precoLivro * $quantidade; // Preço total inicial
$msgErro = '';

// Verificação de Login e Recuperação de Dados
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']) && isset($_POST['senha'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $conexao = new Conexao();
    $conn = $conexao->getConnection();

    // Consulta no banco para buscar nome e endereço
    $query = "SELECT nome, endereco FROM cliente WHERE loginn = ? AND senha = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $login, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Usuário encontrado
        $cliente = $result->fetch_assoc();
        $nome = $cliente['nome'];
        $endereco = $cliente['endereco'];
    } else {
        $msgErro = "Login ou senha inválidos!";
    }

    $stmt->close();
    $conn->close();
}

// Atualização do preço total com base na quantidade enviada
if (isset($_POST['quantidade']) && is_numeric($_POST['quantidade'])) {
    $quantidade = intval($_POST['quantidade']);
    $precoTotal = $precoLivro * $quantidade;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Finalizar Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        // Atualização dinâmica do preço total no frontend
        function atualizarPrecoTotal() {
            const precoLivro = parseFloat(document.getElementById('precoLivro').value);
            const quantidade = parseInt(document.getElementById('quantidade').value);
            const precoTotal = precoLivro * quantidade;
            document.getElementById('precoTotal').value = precoTotal.toFixed(2);
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Login do Cliente</h2>
        <hr>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="login" class="form-label"><strong>Login:</strong></label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label"><strong>Senha:</strong></label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
        
        <?php if ($msgErro): ?>
            <p class="mt-3 text-danger text-center"><?php echo $msgErro; ?></p>
        <?php endif; ?>

        <?php if ($nome && $endereco): ?>
            <hr>
            <h3 class="text-center">Informações do Cliente e Pedido</h3>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
            <p><strong>Endereço:</strong> <?php echo htmlspecialchars($endereco); ?></p>
            <p><strong>Título do Livro:</strong> <?php echo $tituloLivro; ?></p>
            <p><strong>Preço Unitário do Livro:</strong> R$ <?php echo number_format($precoLivro, 2, ',', '.'); ?></p>

            <form action="" method="POST">
                <input type="hidden" name="precoLivro" id="precoLivro" value="<?php echo $precoLivro; ?>">
                <div class="mb-3">
                    <label for="quantidade" class="form-label"><strong>Quantidade:</strong></label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" value="1" min="1" oninput="atualizarPrecoTotal()" required>
                </div>

                <div class="mb-3">
                    <label for="precoTotal" class="form-label"><strong>Preço Total:</strong></label>
                    <input type="text" class="form-control" id="precoTotal" name="precoTotal" value="<?php echo number_format($precoTotal, 2, ',', '.'); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="pagamento" class="form-label"><strong>Forma de Pagamento:</strong></label>
                    <select class="form-select" id="pagamento" name="pagamento" required>
                        <option value="Cartão de Crédito">Cartão de Crédito</option>
                        <option value="Boleto">Boleto</option>
                        <option value="Pix">Pix</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">Finalizar Pedido</button>
            </form>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
