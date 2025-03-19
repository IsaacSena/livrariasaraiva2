<?php       
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;


    class Inserir{
        public function cadastrarCliente(Conexao $conexao,string $nome, string $endereco, string $telefone, string $dataNascimento, string $loginn, string $senha){
            try {
                $conn = $conexao->conectar();
                $sql = "insert into cliente (nome, endereco, telefone, dataNascimento, loginn, senha) values ('$nome', '$endereco', '$telefone', '$dataNascimento', '$loginn', '$senha')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if ($result) {
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Erro ao cadastrar cliente!";
            } catch (Exception $erro) {
                return "<br><br>Algo deu muito errado!<br><br>$erro";
            }//fim do catch
        }//fim do try

    }//fim da classe
    
    
    

    


?>