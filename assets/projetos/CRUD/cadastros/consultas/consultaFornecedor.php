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
	<h1 class="text-center text-white" style="background-color: #1D2F40">CONSULTA FORNECEDOR</h1>
	<br>
		<div class="row">
			
			<div class="col" style="font-weight: 800; color: #BFA36F" >
				<?php
					$arquivo = fopen("cadastro/fornecedor.txt", "r") or die("Não foi possível abrir o arquivo");
					echo nl2br(fread($arquivo,filesize("cadastro/fornecedor.txt")));
					fclose($arquivo);
				?>
			</div>
			
		</div>
		<div class="text-center">
			<button type="button" class="btn btn-danger" onclick="javascript:location.href ='../../menu.php';">Voltar</button>
		</div>
	</div>
  </body>
</html>
