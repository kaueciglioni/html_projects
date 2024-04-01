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
<?php 

include 'conexao.php';

$id_medicamento = $_POST['id'];
$nome = $_POST['nome']; 
$principio = $_POST['principio'];
$fabricante = $_POST['fabricante'];
$tipo = $_POST['tipo'];
$dosagem = $_POST['dosagem'];
$generico = $_POST['generico'];
$controlado = $_POST['controlado'];

$sql = "UPDATE `medicamentos` SET `nome`='$nome',`principio`='$principio',`fabricante`= '$fabricante',`tipo`= '$tipo', `dosagem` = '$dosagem', `generico` = $generico, `controlado` = $controlado  WHERE id_medicamento = $id_medicamento";
    
$atualiza = mysqli_query($conexao,$sql);
?>

<div class="container" style="width: 400px;"></div>
<center>
    <div style="margin-top: 30px;">
        <h3>Atualizado com sucesso!</h3>
    </div>
    <div style="margin-top: 10px;">
        <a href="_filtrar_medicamento.php" class="btn btn-sm btn-primary">Visualisar Medicamentos</a>
    </div>
</center>

</body>
</html>
