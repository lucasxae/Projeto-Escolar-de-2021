<?php
header("Content-type:text/html; charset=utf8");
//importar a classe produtos
require_once "classes/produtos.php";
//criar uma instancia da classe produtos
$Produtos = new Produtos();
//criar uma variavel para receber o resultado do select
$listarProdutos = $Produtos->listarTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
<div class="container al">
    <div class="row">
        <div class="col-md-10">
            <div class="al">
            <h3>Lista de Produtos</h3>
            </div>
        </div>
        <div  class="col-md-2">

            <form action="cadastrar.php">
                <button class="btn btn-info">Novo</button>
            </form>
        </div>
    </div>
    <table class="table table-striped table-white">
        <thead>


                  <tr>
                      <th>ID</th>
                      <th>NOME</th>
                      <th>PRECO</th>
                      <th>MARCA</th>
                      <th>SISTEMA OPERACIONAL</th>
                    
                  </tr>
               </thead>
               <tbody>

               <?php  if($listarProdutos):foreach ($listarProdutos as $Produtos): ?>
            <tr>
                <td><?php echo $Produtos->Id; ?></td>
                <td><?php echo $Produtos->nome; ?></td>
                <td><?php echo $Produtos->preco; ?></td>
                <td><?php echo $Produtos->marca; ?></td>
                <td><?php echo $Produtos->sistema; ?></td>
        
                <td>


                </td>

            </tr>
        <?php endforeach; ?>
        <?php else :  ?>
            
        <?php endif ?>

        </tbody>





    </table>

</body>
</html