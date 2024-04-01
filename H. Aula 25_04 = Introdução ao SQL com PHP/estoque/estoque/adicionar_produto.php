<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>

<body>

<?php 

session_start();
$usuario = $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

?>


<h3>Formulário de cadastro</h3>

<form action="_inserir_produto.php" method="post" style="margin-top: 20px">

        <label>Nome do produto</label>
        <input type="text"name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off"><br/><br/>

        <label>Número do produto</label>
        <input type="number" name="numproduto" placeholder="Insira o número do produto" autocomplete="off"><br/><br/>

        <label>Categoria</label>
        <select class="form-control" name="categoria">

            <?php 
            include 'conexao.php';

            $sql = "SELECT * FROM `categoria` order by categoria ASC";
            $buscar = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $id_categoria = $array['id_categoria'];
                $nome_categoria = $array['categoria'];
                
            ?>
            <option><?php echo $nome_categoria ?></option>

            <?php  } ?>
        </select><br/><br/>

        <label>Quantidade</label>
        <input type="number" name="quantidade" placeholder="Insira a quantidade disponível" autocomplete="off"><br/><br/>

        <label>Fornecedor</label>
        <select class="form-control" name="fornecedor">

            <?php 
            include 'conexao.php';

            $sql2 = "SELECT * FROM `fornecedor`";
            $buscar2 = mysqli_query($conexao,$sql2);

            while ($array2 = mysqli_fetch_array($buscar2)) {
                $id_fornecedor = $array2['id_fornecedor'];
                $nome_fornecedor = $array2['nome_fornecedor'];
                
            ?>
            <option><?php echo $nome_fornecedor ?></option>

            <?php  } ?>

        </select><br/><br/>

        <p><a href="menu.php">Voltar ao menu</a></p>
        <button type="submit" id="botao">Cadastrar</button>

</form>


</body>

</html>