<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		
		#tamanhoContainer {
			width: 500px;
		}

		#botao {
			background-color: #ff1168; /* cor de fundo */
			color: #ffffff; /* cor da letra */
		}

	</style>
</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top:40px">
	<h4>Formulário de Cadastro</h4>
	<form action="_atualizar_produtos.php" method="post" style="margin-top: 20px">

		<?php

		$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
		$buscar = mysqli_query($conexao,$sql);
		while ($array = mysqli_fetch_array($buscar)) {

			$id_estoque = $array['id_estoque'];
     			$nroproduto = $array['nroproduto'];
     			$nomeproduto = $array['nomeproduto'];
     			$categoria = $array['categoria'];
     			$quantidade = $array['quantidade'];
     			$fornecedor = $array['fornecedor'];

			?>

			  <div class="form-group">
			    <label>Nro Produto</label>
			    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
			    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
			  </div>

			  <div class="form-group">
			    <label>Nome Produto</label>
			    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
			  </div>

			  <div class="form-group">
			    <label>Categoria</label>
			    <select class="form-control" name="categoria">
				      <option>Periféricos</option>
				      <option>Hardware</option>
				      <option>Software</option>
				      <option>Celulares</option>
				      
			    </select>
		  	  </div>

			  <div class="form-group">
			    <label>Quantidade</label>
			    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
			  </div>

			  <div class="form-group">
			    <label>Fornecedor</label>
			    <select class="form-control" name="fornecedor">
				      <option>Fornecedor A</option>
				      <option>Fornecedor B</option>
				      <option>Fornecedor C</option>
			    </select>
		  	  </div>

		  	  <div style="text-align: right;">
		  	  <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
		  	</div>
		  	<?php } ?>
	</form>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>