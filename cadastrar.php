<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/produtos.php";
$Produto = new produtos();

if(isset($_POST["salvar"])){

     $result = $Produto->inserir();

     if($result == '1'){
         header('location: cadastrar.php');
     }
}
?>
<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <title>Trimestral3</title>
    <link href="estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="listar.php" method="post">
	<footer>
<div class ="titulo" id="titulo">
    <h1>HITECH PC's</h1>
</div>
<div class="comeco" id="comeco">
				
<h1 >Cadastrar vendas</h1>
</div>
							
</footer>					
<div class="cima" id="cima" tabindex="-1" aria-hidden="true">
								
<form class="form" action="listar.php" method="POST" id="cadastro" >
											
<div>											
<label class="required fs-6 fw-bold mb-2">Id</label></div>
<div>
<input type="number" class="cadastro" placeholder="" name="id" />
</div>


<div>
<label class="required fs-6 fw-bold mb-2">Nome</label></div>
<div>
<input type="text" class="cadastro" placeholder="" name="nome" />
</div>


<div>
<label class="required fs-6 fw-bold mb-2">Preco</label></div>
<div>
<input type="number" class="cadastro" placeholder="" name="preco" />
</div>


<div>
<label class="required fs-6 fw-bold mb-2">Marca</label></div>
<div>
<input type="text" class="cadastro" placeholder="" name="marca" />
</div>


<div>
<label class="required fs-6 fw-bold mb-2">Sistema Operacional</label></div>
<div>
<input type="text" class="cadastro" placeholder="" name="sistema" />
</div>


<div>
<button type="submit" name="salvar" id="botao" class="botao">SALVAR</button>
</div>
</form>
<footer>
	<h3>acessar vendas</h3>
	<div>
	<h3>tel:4991-1192</h3>
	<h3></h3>
</footer>
								
								

</body>
</html>
