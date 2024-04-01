<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao,$sql);
?>

<h3>Produto excluído com sucesso</h3>
<p><a href="listar_produtos.php">Ir para lista de produtos</a></p>
