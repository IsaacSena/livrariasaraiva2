<?php 
    namespace PHP\Modelo;
    require_once('DAO/Conexao.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Desabilitar.php');

    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Desabilitar;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;

    $desabilitar = new Desabilitar();
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
    <title>Crud Cliente</title>
</head>
<body>

<h1>Consultar Cliente</h1><br>


        <form class = "form-control form-control-sm" method="POST"  style = "width;50%;margin">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Digite o código do cliente</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "idCliente">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar

            <?php
            if (isset($_POST['idCliente']) && $_POST['idCliente'] != ""){
                $consultar->consultarCliente($conexao,$_POST['idCliente']);
            }
            ?>
        </button>
    </form>
    <br><br><br>

    <h1>Atualizar Cliente</h1><br>


    <form class = "form-control form-control-sm" method="POST"  style = "width;50%;margin">
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Digite o código do cliente</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "idCliente">
        </div>
        <select name = "campos" class="form-select" aria-label="Default select example">
            <option selected>Escolha um campo para atualizar</option>
            <option value="nome">Nome</option>
            <option value="endereco">Endereço</option>
            <option value="telefone">Telefone</option>
            <option value="dataNascimento">Data de Nascimento</option>
            <option value="loginn">Login</option>
            <option value="senha">Senha</option>
        </select>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Novo Dado</label>
          <input type="text" class="form-control" id="novoDado" name = "novoDado">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar
            <?php 
            if (isset($_POST['idCliente']) && $_POST['idCliente'] != "" && isset($_POST['campos']) && $_POST['campos'] != "" && isset($_POST['novoDado']) && $_POST['novoDado'] != "") {
                 $atualizar->atualizarCliente($conexao, $_POST['campos'], $_POST['novoDado'], $_POST['idCliente']);
            }
               
            ?>
        </button>
    </form> <br><br><br>

    <h1>Desabilitar Cliente</h1><br>


    <form class = "form-control form-control-sm" method="POST"  style = "width;50%;margin">
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Digite o código do cliente</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "idCliente">
        </div>
        <select name = "campos" class="form-select" aria-label="Default select example">
            <option selected>Escolha um campo para atualizar</option>
            <option value="situacaoCliente">Situação do Cliente</option>
        </select>
         <select id = "novoDado" name = "novoDado" class="form-select" aria-label="Default select example">
            <option selected>Escolha um campo para atualizar</option>

            <option  value="Inativo">Inativo</option>
            <option value="Ativo">Ativo</option>
        </select><br><br>

        <button type="submit" class="btn btn-primary">Confirmar
            <?php 
            if (isset($_POST['idCliente']) && $_POST['idCliente'] != "" && isset($_POST['campos']) && $_POST['campos'] != "" && isset($_POST['novoDado']) && $_POST['novoDado'] != "") {
                 $desabilitar->desabilitarCliente($conexao, $_POST['campos'], $_POST['novoDado'], $_POST['idCliente']);
            }
               
            ?>
        </button>
    </form> <br><br><br>
    


</body>
</html>