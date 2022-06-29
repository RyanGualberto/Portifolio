<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Fornecedor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body style="background-color: #344B59;">
	<div class="container">
		<h1 class="text-center text-white" style="background-color: #1D2F40" ; ">CADASTRO DE FORNECEDOR</h1>
		<br>
		<div class=" row">
			<div class="col">

			</div>
			<div class="col">
				<form action="#" method="POST">
					<div class="mb-3">
						<label for="nmEmpresa" class="form-label" style="color: #BFA36F; font-weight: 800;">Nome Da Empresa</label>
						<input type="text" class="form-control" id="nmEmpresa" name="nmEmpresa">
					</div>
					<div class="mb-3">
						<label for="nmRepresentante" class="form-label" style="color: #BFA36F; font-weight: 800;">Nome Do Representante</label>
						<input type="text" class="form-control" id="nmRepresentante" name="nmRepresentante">
					</div>
					<div class="mb-3">
						<label for="cnpj" class="form-label" style="color: #BFA36F; font-weight: 800;">CNPJ</label>
						<input type="text" class="form-control" id="cnpj" name="cnpj">
					</div>
					<div class="mb-3">
						<label for="produto" class="form-label" style="color: #BFA36F; font-weight: 800;">Produto</label>
						<input type="text" class="form-control" id="produto" name="produto">
					</div>
					<div class="mb-3">
						<label for="endereco" class="form-label" style="color: #BFA36F; font-weight: 800;">Endereço</label>
						<input type="text" class="form-control" id="endereco" name="endereco">
					</div>
					<div class="mb-3">
						<label for="tel" class="form-label" style="color: #BFA36F; font-weight: 800;">Telefone</label>
						<input type="text" class="form-control" id="tel" name="tel">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label" style="color: #BFA36F; font-weight: 800;">E-mail</label>
						<input type="text" class="form-control" id="email" name="email">
					</div>
					<div class="text-center">
						<input type="submit" class="btn btn-primary" style="background: #1D2F40;
    color: white;
    border-color: transparent;" value="Cadastrar">
						<button type="button" class="btn btn-danger" style="background: transparent;
    border-color: #1D2F40;
    color: #1D2F40; " onclick="javascript:location.href ='../menu.php';">Voltar</button>
					</div>
				</form>
			</div>
			<div class="col">

			</div>
	</div>
	</div>
</body>

</html>

<?php

if (!empty($_POST)) {
	$nmEmpresa = $_POST['nmEmpresa'];
	$nmRepresentante = $_POST['nmRepresentante'];
	$cnpj = $_POST['cnpj'];
	$produto = $_POST['produto'];
	$endereco = $_POST['endereco'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];

	$arquivo = fopen("consultas/cadastro/fornecedor.txt", "a+") or die("Não foi possivel abrir o arquivo!");

	$conteudo = "id: $id,
				nmEmpresa: $nmEmpresa,
				nmRepresentante: $nmRepresentante,
				CNPJ: $cnpj,
				Produto: $produto,
	 			Endereço: $endereco, 
	 			Telefone: $tel,
	 			Email: $email

				_________________________________________
				";

	if (fwrite($arquivo, $conteudo)) {
		echo "<script>alert('Cadastrado com sucesso');</script>";
		fclose($arquivo);
	} else {
		echo "<script>alert('Erro ao cadastrar as informações');</script>";
	}
}


?>