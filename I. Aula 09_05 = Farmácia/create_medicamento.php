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
		<h3>Cadastrar medicamento</h3>
		
		<form action="_create_medicamento.php" method="post" style="margin-top: 20px">
		
			<div class="mb-3">
                <label class="form-label">Nome Comercial</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome comercial do medicamento" required>
            </div>
			
			<div class="mb-3">
                <label class="form-label">Princípio Ativo</label>
                <input type="text" class="form-control" name="principio" placeholder="Insira o princípio ativo do medicamento" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Dosagem</label>
                <input type="text" class="form-control" name="dosagem" placeholder="Insira a dosagem do medicamento" required>
            </div>
			
			<div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" placeholder="Insira o tipo do medicamento (comprimido, pomada, etc)" required>
            </div>
			
			<div class="mb-3">
				<label class="form-label">É Genérico?</label>
			</div>
			
			<div class="mb-3">
				<input type="radio" class="form-check-input" name="generico" value="1" id="genericosim" checked>
				<label class="form-check-label" for="genericosim">Sim</label>
			</div>
			<div class="mb-3">
				<input type="radio" class="form-check-input" name="generico" id="genericonao" value="2">
				<label class="form-check-label" for="genericonao">Não</label>
			</div>

            <div class="mb-3">
				<label class="form-label">É Controlado?</label>
			</div>
			
			<div class="mb-3">
				<input type="radio" class="form-check-input" name="controlado" value="1" id="controladosim" checked>
				<label class="form-check-label" for="controladosim">Sim</label>
			</div>
			<div class="mb-3">
				<input type="radio" class="form-check-input" name="controlado" id="controladonao" value="2">
				<label class="form-check-label" for="controladonao">Não</label>
			</div>
			
			<div class="mb-3">
                <label class="form-label">Fabricante</label>
                <input type="text" class="form-control" name="fabricante" placeholder="Insira o fabricante do medicamento" required>
            </div>
			
			<div style="text-align: right;">
                <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
                <button type="submit" id="botao" class="btn btn-success btn-sm">Cadastrar</button>
            </div>
		
		</form>
		
	</div>
	
</body>
</html>