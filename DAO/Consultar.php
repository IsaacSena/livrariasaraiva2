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
        function consultarPedido(Conexao $conexao, int $idPedido){
          try {
            $conn = $conexao->conectar();
            $sql = "select nome,endereco from pedido inner join cliente on nome = idCliente and idPedido = '$idPedido'";
            $result = mysqli_query($conn, $sql);
  
            while ($dados = mysqli_fetch_array($result)){ 
              if ($dados['idPedido'] == $idPedido){ 
                echo "<br>nome: ".$dados['nome'].
                     "<br>endereco: ".$dados['endereco'];
                     return;
              }
            }
          } catch (Execption $erro) {
            echo "Algo deu errado!".$erro;
          }
        }

      }

  
?>