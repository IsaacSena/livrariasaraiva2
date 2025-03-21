<?php 
    namespace PHP\modelo\DAO;
    require_once('Conexao.php');
    use PHP\modelo\DAO\Conexao;

    class Consultar{
        function consultarLogin(Conexao $conexao, string $loginn, string $senha){
          try {
            $conn = $conexao->conectar();
            $sql = "select * from cliente where loginn = '$loginn' and senha = '$senha'";
            $result = mysqli_query($conn, $sql);
            while ($dados = mysqli_fetch_array($result)){
              if ($dados['loginn'] == $loginn && $dados['senha'] == $senha){
                header('Location: TelaLogado.php');
              }
            }
          } catch (Exception $erro) {
            echo "Algo deu errado!".$erro;
          }
        }
 
      function consultarCliente(Conexao $conexao, int $idCliente){
        try {
            $conn = $conexao->conectar();
            $sql = "select * from cliente";
            $result = mysqli_query($conn, $sql);

            while ($dados = mysqli_fetch_Array($result)) {
                if ($dados['idCliente']==$idCliente) {
                    echo "<br>Código do Cliente : ".$dados['idCliente'].
                         "<br>Nome : ".$dados['nome'].
                         "<br>Endereco : ".$dados['endereco'].
                         "<br>Telefone : ".$dados['telefone'].
                         "<br>dataNascimento : ".$dados['dataNascimento'].
                         "<br>Login : ".$dados['loginn'].
                         "<br>Senha : ".$dados['senha'].
                         "<br>Situação : ".$dados['situacaoCliente'];
                         return;//Encerrar o processo
                }//fim do if
            }//fim do while
        } catch (Exception $erro) {
            echo "Algo deu errado!".$erro;
        }//fim do try
    }//fim do metodo

    function consultarLivros(Conexao $conexao, int $idLivros){
      try {
          $conn = $conexao->conectar();
          $sql = "select * from livros";
          $result = mysqli_query($conn, $sql);

          while ($dados = mysqli_fetch_Array($result)) {
              if ($dados['idLivros']==$idLivros) {
                  echo "<br>Código Livro : ".$dados['idLivros'].
                       "<br>Título do Livro : ".$dados['titulo'].
                       "<br>Preço do Livro : ".$dados['precoLivro'].
                       "<br>Quantidade : ".$dados['quantidadeLivros'].
                       "<br>Situação : ".$dados['situacaoLivro'];
                       return;//Encerrar o processo
              }//fim do if
          }//fim do while
      } catch (Exception $erro) {
          echo "Algo deu errado!".$erro;
      }//fim do try
  }//fim do metodo

  function consultarPedido(Conexao $conexao, int $idPedido) {
    try {
        $conn = $conexao->conectar();
        
        // SQL corrigido com JOIN para obter dados de cliente e livros relacionados ao pedido
        $sql = "
            SELECT p.idPedido, c.nome AS clienteNome, l.titulo AS livroTitulo, 
                   l.precoLivro, p.precoTotal, p.pagamento
            FROM pedido p
            JOIN cliente c ON p.codigoCliente = c.idCliente
            JOIN livros l ON p.codigoLivros = l.idLivros
            WHERE p.idPedido = $idPedido";
        
        // Executa a consulta
        $result = mysqli_query($conn, $sql);
        
        // Verifica se algum resultado foi encontrado
        if ($dados = mysqli_fetch_array($result)) {
            echo "<br>Código Pedido : " . $dados['idPedido'] .
                 "<br>Cliente: " . $dados['clienteNome'] .
                 "<br>Título do Livro : " . $dados['livroTitulo'] .
                 "<br>Preço Total : " . $dados['precoTotal'] .
                 "<br>Forma de Pagamento : " . $dados['pagamento'];
        } else {
            echo "Pedido não encontrado.";
        }
        
    } catch (Exception $erro) {
        echo "Algo deu errado! " . $erro;
    }
}

}



  
?>