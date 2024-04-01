<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
</head>

<body>

<?php 

session_start();

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

include 'conexao.php';

$sql = "SELECT `nivel_usuario` FROM `usuarios` WHERE `mail_usuario` = '$usuario' and `status` = 'Ativo'";
$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];

?>

<h3>Lista de produtos</h3>

<br>
<br>
<table class="table" id="table_id">
    <thead>
        <tr>
            <th scope="col">Nome do produto</th>
            <th scope="col" style="min-width: 120px;">Nº do produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Fornecedor</th>
            <th scope="col" style="min-width: 148px;">
                <center>Ação</center>
            </th>
        </tr>
    </thead>


<?php
include 'conexao.php';
$sql = "SELECT * FROM `estoque`";
$busca = mysqli_query($conexao,$sql);

while ($array = mysqli_fetch_array($busca)) {
    
    $id_estoque = $array['id_estoque'];
    $numproduto = $array['numproduto']; 
    $nomeproduto = $array['nomeproduto'];
    $categoria = $array['categoria'];
    $quantidade = $array['quantidade'];
    $fornecedor = $array['fornecedor'];

?>
<tr>
    <td style="vertical-align: inherit;"> <?php echo $nomeproduto ?> </td>
    <td style="vertical-align: inherit;"> <?php echo $numproduto ?> </td>
    <td style="vertical-align: inherit;"> <?php echo $categoria ?> </td>
    <td style="vertical-align: inherit;"> <?php echo $quantidade ?> </td>
    <td style="vertical-align: inherit;"> <?php echo $fornecedor ?> </td>
    <td style="vertical-align: inherit;">
<center>
    <?php 
    if(($nivel == 1)||($nivel == 2)){
    ?>
    <p><a href="editar_produto.php?id=<?php echo $id_estoque ?>">Editar</a></p>
    <p><a href="deletar_produto.php?id=<?php echo $id_estoque ?>">Excluir</a></p>
    <?php } ?>
</center>
</td>
<?php } ?>

</tr>
</table>

<br/>
<br/>

<p><a href="adicionar_produto.php">Cadastrar produto</a></p>
<p><a href="menu.php">Voltar ao menu</a></p>


</body>

</html>