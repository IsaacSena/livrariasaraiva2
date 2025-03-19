<?php 
    namespace PHP\Modelo\DAO;
    
    class Conexao{
        function conectar(){
            try {
                $conn = mysqli_connect('localhost','root','','saraiva');
                if ($conn) {
                    
                    return $conn;
                }
            }
            catch (Exception $e) {
                return "<br>Erro ao conectar!.$erro<br><br>";
                
            }//fim do try
        }//fim da função conectar
    }//fim da classe
?>