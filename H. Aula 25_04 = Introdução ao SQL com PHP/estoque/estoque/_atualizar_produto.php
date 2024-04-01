<?php 

include 'conexao.php';

$id = $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`= '$fornecedor' WHERE id_estoque = $id";
    
$atualiza = mysqli_query($conexao,$sql);
?>

<h3>Atualizado com sucesso!</h3>
<P><a href="listar_produtos.php">Ir para lista de produtos</a></p>
