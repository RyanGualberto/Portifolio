<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="jquery.min.js"> </script>
	<script>
		$(document).ready(function() {
			$('#exampleModal').modal('show');
		});
	</script>
</head>

<body>
	<!-- Modal -->
	<div class="modal">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">SISTEMA WEB 1.0</h5>
		</div>
		<form action="#" method="POST">
			<div class="modal-body">
				<label for="staticEmail" class="col-sm-2 col-form-label">Usuario</label>
				<input type="text" class="form-control" id="staticEmail" name="email" placeholder="Digite Seu Nome De Usuário">
				<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
				<input type="password" class="form-control" id="inputPassword" name="senha" placeholder="Digite Sua Senha">
			</div>
			<div class="modal-footer">
				<button type="reset" class="btnSair" data-bs-dismiss="modal">Sair</button>
				<button type="submit" class="btnEntrar">Entrar</button>
			</div>
		</form>
	</div>
</body>

</html>
<?php

if (!empty($_POST)) {
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if (($email == "Admin") && ($senha == "Admin")) {
		header('Location:menu.php');
	} else {
		echo "<script>alert('Email ou senha incorreto');</script>";
	}
}
?>