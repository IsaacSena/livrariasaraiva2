<?php 
    namespace PHP\Modelo;
    require_once('DAO/Conexao.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Desabilitar.php');
    require_once('DAO/Inserir.php');
    use PHP\Modelo\DAO\Desabilitar; 
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;

    $desabilitar = new Desabilitar();
    $inserir = new Inserir();
    $atualizar = new Atualizar();
    $conexao = new Conexao();
    $consultar = new Consultar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Consultar Livro</title>
</head>
<body>



<h1>Consultar Livro</h1><br>


        <form class = "form-control form-control-sm" method="POST"  style = "width;50%;margin">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Digite o código do livro</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "idLivros">
        </div>
        <button type="submit" class="btn btn-primary">Consultar

            <?php
            if (isset($_POST['idLivros']) && $_POST['idLivros'] != ""){
                $consultar->consultarLivros($conexao,$_POST['idLivros']);
            }
            ?>
        </button>
    </form><br><br>

    <h1>Cadastrar Livros</h1><br>
    
    <form class = "form-control form-control-sm" method="POST"  style = "width;50%;margin">
    <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nome do livro</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "titulo">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Preço do livro</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "precoLivro">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Quantidade de livros</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "quantidadeLivros">
        </div> 
        <button type="submit" class="btn btn-primary">Cadastrar
        <?php
               if (isset($_POST['titulo'])&& $_POST['titulo'] != "" && isset($_POST['precoLivro'])&& $_POST['precoLivro'] != "" && isset($_POST['quantidadeLivros'])&& $_POST['quantidadeLivros'] != "") {
                try {
                  $titulo = $_POST['titulo'];
                  $precoLivro = $_POST['precoLivro'];
                  $quantidadeLivros = $_POST['quantidadeLivros'];
                  $situacaoLivro = "Ativo";

                  $inserir->cadastrarLivro($conexao, $titulo, $precoLivro, $quantidadeLivros, $situacaoLivro);
          
                } catch (Except $erro) {
                  echo "Algo deu errado!<br><br>$erro";
                }
            
              }
            ?>
        </button>
    </form><br><br>

    <h1>Atualizar Livro</h1><br>


    <form class = "form-control form-control-sm" method="POST"  style = "width;50%;margin">
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Digite o código do cliente</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "idLivros">
        </div>
        <select name = "campos" class="form-select" aria-label="Default select example">
            <option selected>Escolha um campo para atualizar</option>
            <option value="titulo">Titulo do livro</option>
            <option value="precoLivro">Preço do livro</option>
            <option value="quantidadeLivros">Quantidade de Livros</option>
           
        </select>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Novo Dado</label>
          <input type="text" class="form-control" id="novoDado" name = "novoDado">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar
            <?php 
            if (isset($_POST['idLivros']) && $_POST['idLivros'] != "" && isset($_POST['campos']) && $_POST['campos'] != "" && isset($_POST['novoDado']) && $_POST['novoDado'] != "") {
                 $atualizar->atualizarLivro($conexao, $_POST['campos'], $_POST['novoDado'], $_POST['idLivros']);
            }
               
            ?>
        </button>
        </form> <br><br><br>

        <h1>Desabilitar Livro</h1><br>

        <form class = "form-control form-control-sm" method="POST"  style = "width;50%;margin">
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Digite o código do </label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "idLivros">
        </div>
        <select name = "campos" class="form-select" aria-label="Default select example">
            <option selected>Escolha um campo para atualizar</option>
            <option value="sitacaoLivro">Situação do livro</option>
        </select><br>
        <select id="novoDado" name = "novoDado" class="form-select" aria-label="Default select example">
            <option selected>Escolha Ativo ou Inativo</option>
            <option value="situacaoLivro">Ativo</option>
            <option value="situacaoLivro">Inativo</option>
        </select><br>

        <button type="submit" class="btn btn-primary">Atualizar
     

            <?php
            if (isset($_POST['idLivros']) && $_POST['idLivros'] != ""){
                $desabilitar->desabilitarLivro($conexao,$_POST['idLivros']);
            }
            ?>
        </button>
    </form><br><br>


</body>
</html>