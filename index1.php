<?php

include 'conexao.php'; // primeiro passo, incluir a conexão
include 'script/password.php';

$usuario = $_POST['usuario']; // segundo passo incluir as variáveis
$senhausuario = $_POST['senha']; // segundo passo incluir as variáveis


$sql = "SELECT mail_usuario,senha_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($buscar);//consultar o numero de linhas de email da minha base, se o total for igual a 0, vai mandar uma mensagem você não possui cadastro, volte e realiza o cadastro.


while ($array = mysqli_fetch_array($buscar)) {
		$senha = $array['senha_usuario'];

$senhadecodificada = sha1($senhausuario);


	if ($total > 0) {

	 	if($senhadecodificada == $senha) {

	 		session_start();
	 		$_SESSION['usuario'] = $usuario;

	 		header('Location: menu.php');

	 	} else {

	 		header('Location: erro.php');
	 	}

	 } else {

	 	header('Location: erro.php');


	 }

}

?>