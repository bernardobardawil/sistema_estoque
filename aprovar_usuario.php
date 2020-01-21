<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/041b2d7970.js" crossorigin="anonymous"></script>

	<title>Aprovar Usuários</title>
</head>
<body>

<div class="container" style="margin-top: 40px;">

	<div style="text-align: right;">
		<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
	</div>

<h3>Lista de Usuários</h3>
<br>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Nome Usuário</th>
        <th scope="col">Email</th>
        <th scope="col">Nível</th>
        <th scope="col">Ação</th>
    </tr>
  </thead>
 
    
     	
     	<?php 
     		include 'conexao.php';
     		$sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
     		$busca = mysqli_query($conexao,$sql);

     		while ($array = mysqli_fetch_array($busca)) {
     			
     			$id_usuario = $array['id_usuario'];
     			$nomeusuario = $array['nome_usuario'];
          $mail = $array['mail_usuario'];
          $nivel = $array['nivel_usuario'];
     			
				?>
			<tr>
		     	<td><?php echo $nomeusuario ?></td>
          <td><?php echo $mail ?></td>
          <td><?php echo $nivel ?></td>

        

          </td>

          </td>
		     	<td>
            <a class="btn btn-success btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=1" role="button"><i class="far fa-smile-beam"></i></i>&nbsp;Administrador</a>

            <a class="btn btn-warning btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=2" role="button"><i class="far fa-smile-beam"></i></i>&nbsp;Funcionario</a>

            <a class="btn btn-dark btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=3" role="button"><i class="far fa-smile-beam"></i></i>&nbsp;Conferente</a>

		     		<a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
		     	</td>
		  </tr>

		<?php } ?>

    
    
</table>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>