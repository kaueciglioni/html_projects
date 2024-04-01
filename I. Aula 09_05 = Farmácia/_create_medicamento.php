<?php

include 'conexao.php';


$nome = $_POST['nome']; //Recebe valor do atributo
$principio = $_POST['principio'];
$dosagem = $_POST['dosagem'];
$tipo = $_POST['tipo'];
$fabricante = $_POST['fabricante'];
$controlado = $_POST['controlado'];
$generico = $_POST['generico'];

$sql = "INSERT INTO `medicamentos`( `nome`, `principio`, `fabricante`, `tipo`, `dosagem`, `generico`, `controlado`) VALUES ('$nome','$principio','$fabricante','$tipo','$dosagem',$generico, $controlado)";

$inserir = mysqli_query($conexao, $sql);
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
		
</head>
<body>


<div class="container" style="widith: 500px; margin-top: 30px;">
    <center>
        <h4>Medicamento adicionado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
        </center>
    </div>

</div>

</body>
</html>