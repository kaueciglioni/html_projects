<?php 
include 'conexao.php';

$id = $_GET['id'];

?>

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

        <h3>Formulário de cadastro</h3>

        <form action="_editar_medicamento.php" method="post" style="margin-top: 20px">
            <?php 
            
            $sql = "SELECT * FROM `medicamentos` WHERE id_medicamento = $id";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id_medicamento = $array['id_medicamento'];
                $nome = $array['nome']; 
                $principio = $array['principio'];
                $fabricante = $array['fabricante'];
                $tipo = $array['tipo'];
                $dosagem = $array['dosagem'];
                $generico = $array['generico'];
                $controlado = $array['controlado'];
            ?>
            
            <div class="mb-3">
            <label class="form-label">Código do Medicamento</label>
                <input type="number" class="form-control" name="id" value="<?php echo $id_medicamento?>" style="display:none;">
            </div>

            <div class="mb-3">
                <label class="form-label">Nome Comercial</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $nome?>" required>
            </div>
			
			<div class="mb-3">
                <label class="form-label">Princípio Ativo</label>
                <input type="text" class="form-control" name="principio" value="<?php echo $principio?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Dosagem</label>
                <input type="text" class="form-control" name="dosagem" value="<?php echo $dosagem?>" required>
            </div>
			
			<div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" value="<?php echo $tipo?>" required>
            </div>
			
			<div class="mb-3">
				<label class="form-label">É Genérico?</label>
			</div>
			
			<div class="mb-3">
				<input type="radio" class="form-check-input" name="generico" value="1" id="genericosim" <?php echo ($generico == 1) ? "checked" : null; ?>>
				<label class="form-check-label" for="genericosim">Sim</label>
			</div>
			<div class="mb-3">
				<input type="radio" class="form-check-input" name="generico" id="genericonao" value="2" <?php echo ($generico == 2) ? "checked" : null; ?>>
				<label class="form-check-label" for="genericonao">Não</label>
			</div>

            <div class="mb-3">
				<label class="form-label">É Controlado?</label>
			</div>
			
			<div class="mb-3">
				<input type="radio" class="form-check-input" name="controlado" value="1" id="controladosim" <?php echo ($controlado == 1) ? "checked" : null; ?>>
				<label class="form-check-label" for="controladosim">Sim</label>
			</div>
			<div class="mb-3">
				<input type="radio" class="form-check-input" name="controlado" id="controladonao" value="2" <?php echo ($controlado == 2) ? "checked" : null; ?>>
				<label class="form-check-label" for="controladonao">Não</label>
			</div>
			
			<div class="mb-3">
                <label class="form-label">Fabricante</label>
                <input type="text" class="form-control" name="fabricante" value="<?php echo $fabricante?>" required>
            </div>

            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-warning btn-sm">Atualizar</button>
            </div>
            <?php } ?>

        </form>
    </div>


</body>

</html>