<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Produto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body style="background-color: #344B59;">
	<div class="container">
		<h1 class="text-center text-white" style="background-color: #1D2F40" ; ">CADASTRO DE PRODUTO</h1>
		<br>
		<div class=" row">
			<div class="col">

			</div>
			<div class="col">
				<form action="#" method="POST">
					<div class="mb-3">
						<label for="nome" class="form-label" style="color: #BFA36F; font-weight: 800;">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome">
					</div>
					<div class="mb-3">
						<label for="nmFornecedor" class="form-label" style="color: #BFA36F; font-weight: 800;">Fornecedor</label>
						<input type="text" class="form-control" id="nmFornecedor" name="nmFornecedor">
					</div>
					<div class="mb-3">
						<label for="categoria" class="form-label" style="color: #BFA36F; font-weight: 800;">Categoria</label>
						<input type="text" class="form-control" id="categoria" name="categoria">
					</div>
					<div class="mb-3">
						<label for="tel" class="form-label" style="color: #BFA36F; font-weight: 800;">Valor</label>
						<input type="text" class="form-control" id="tel" name="tel">
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
	$nome = $_POST['nome'];
	$nmFornecedor = $_POST['nmFornecedor'];
	$categoria = $_POST['categoria'];
	$valor = $_POST['valor'];

	$arquivo = fopen("consultas/cadastro/produto.txt", "a+") or die("Não foi possivel abrir o arquivo!");

	$conteudo = "Produto: $nome, 
	Fornecedor: $nmFornecedor,
	Categoria: $categoria,
	Valor: $valor
	
	________________________________________";

	if (fwrite($arquivo, $conteudo)) {
		echo "<script>alert('Cadastrado com sucesso');</script>";
		fclose($arquivo);
	} else {
		echo "<script>alert('Erro ao cadastrar as informações');</script>";
	}
}


?>