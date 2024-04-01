<?php

include 'conexao.php';


$numproduto = $_POST['numproduto']; //Recebe valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`( `numproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($numproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);
?>

<h4>Produto adicionado com sucesso!</h4>

<p><a href="menu.php">Voltar ao menu</a></p>
