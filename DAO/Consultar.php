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
        function consultarLivro(Conexao $conexao, int $codigoLivros){   
          try {   
              $conn = $conexao->conectar();   
      
              // SQL com JOIN correto entre cliente, livros e pedido
              $sql = "SELECT 
                          cliente.nome, 
                          cliente.endereco, 
                          livros.titulo, 
                          livros.precoLivro, 
                          pedido.precoTotal, 
                          pedido.pagamento
                      FROM 
                          pedido
                      INNER JOIN cliente ON pedido.codigoCliente = cliente.idCliente
                      INNER JOIN livros ON pedido.codigoLivros = livros.idLivros
                      WHERE 
                          pedido.codigoLivros = '$codigoLivros'"; // Alterado para buscar pelo codigoLivros
              
              // Executando a consulta
              $result = mysqli_query($conn, $sql);   
      
              // Verificando e exibindo os dados
              while ($dados = mysqli_fetch_array($result)) {   
                  echo "<br><b>Nome do Cliente:</b> ".$dados['nome'].   
                      "<br><b>Endereço do Cliente:</b> ".$dados['endereco'].   
                      "<br><b>Título do Livro:</b> ".$dados['titulo'].   
                      "<br><b>Preço do Livro:</b> R$ ".$dados['precoLivro'].   
                      "<br><b>Preço Total do Pedido:</b> R$ ".$dados['precoTotal'].   
                      "<br><b>Forma de Pagamento:</b> ".$dados['pagamento'];   
                  return;   
              }   
      
              // Caso o pedido não seja encontrado
              echo "Pedido não encontrado.";   
      
          } catch (Exception $erro) {   
              echo "Algo deu errado! ".$erro;   
          }   
      }
      
      

      }

  
?>