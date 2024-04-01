<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Criar medicamento</title>
	
	<style>
    #container {
        max-width: 640px;
    }
    </style>
</head>
<body>

	<div class="container" style="margin-top: 40px" id="container">
		<h3>Buscar medicamentos</h3>
		
		<form action="_filtrar_medicamento.php" method="post" style="margin-top: 20px">
		
			<div class="mb-3">
                <label class="form-label">Entre com o medicamento, nome comercial ou fabricante</label>
                <input type="text" class="form-control" name="filtro" placeholder="Entre com os dados para consulta">
            </div>
		
			<div style="text-align: right;">
                <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
                <button type="submit" id="botao" class="btn btn-success btn-sm">Pesquisar</button>
            </div>
		
		</form>
		
	</div>

</body>
</html>