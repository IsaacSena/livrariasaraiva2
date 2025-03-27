<?php       
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;


    class Inserir{
        public function cadastrarCliente(Conexao $conexao,string $nome, string $endereco, string $telefone, string $dataNascimento, string $loginn, string $senha, string $situacaoCliente){
            try {
                $conn = $conexao->conectar();
                $sql = "insert into cliente (nome, endereco, telefone, dataNascimento, loginn, senha,situacaoCliente) values ('$nome', '$endereco', '$telefone', '$dataNascimento', '$loginn', '$senha','$situacaoCliente')";
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

        public function cadastrarLivro(Conexao $conexao,string $titulo, float $precoLivro, int $quantidadeLivros,string $situacaoLivro){
            try {
                $conn = $conexao->conectar();
                $sql = "insert into livros (titulo, precoLivro, quantidadeLivros,situacaoLivro) values ('$titulo', '$precoLivro', '$quantidadeLivros', '$situacaoLivro')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if ($result) {
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Erro ao cadastrar livro!";
            } catch (Exception $erro) {
                return "<br><br>Algo deu muito errado!<br><br>$erro";
            }//fim do catch
        }//fim do try
    }//fim da classe
    
    
    

    


?>