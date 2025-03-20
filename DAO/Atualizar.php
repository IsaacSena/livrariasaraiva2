<?php 
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    require_once('Consultar.php');
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;

    class Atualizar{
        function atualizarCliente(Conexao $conexao, string $campo, string $novoDado, int $idCliente){
            try {
                $codigo = "";//instanciar a variavel
                $consultar = new Consultar();
                $conn = $conexao->conectar();
                if ($campo == "nome" or $campo == "endereco" or $campo == "telefone" or $campo == "" or $campo == "dataNascimento" or $campo == "loginn" or $campo == "senha" or $campo == "situacaoCliente") {
                $sql = "update cliente set $campo = '$novoDado' where idCliente = '$idCliente'";
                }
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "Atualizado com sucesso!";
                }else {
                    echo "Não atualizado!";
                }//fim do if
            } catch (Exception $erro) {
                echo "Algo deu errado!<br><br>$erro";
            }//fim do try
        }//fim da funçao

        function atualizarLivro(Conexao $conexao, string $campo, string $novoDado, int $idLivros){
            try {
                $codigo = "";//instanciar a variavel
                $consultar = new Consultar();
                $conn = $conexao->conectar();
                if ($campo == "titulo" or $campo == "precoLivro" or $campo == "quantidadeLivros") {
                    $sql = "update livros set $campo = '$novoDado' where idLivros = '$idLivros'";
                }
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "Atualizado com sucesso!";
                }else {
                    echo "Não atualizado!";
                }//fim do if
            } catch (Exception $erro) {
                echo "Algo deu errado!<br><br>$erro";
            }//fim do try
        }//fim da funçao
    }//fim da classe


