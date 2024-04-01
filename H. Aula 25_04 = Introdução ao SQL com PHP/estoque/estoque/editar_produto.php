<?php 
include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>

<body>


        <h3>Formulário de cadastro</h3>

        <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
            <?php 
            
            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id_estoque = $array['id_estoque'];
                $numproduto = $array['numproduto']; 
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

            ?>

                <label>Número do produto</label>
                <input type="number" name="numproduto" value="<?php echo $numproduto?>" disabled><br/>
                <input type="hidden" name="id" value="<?php echo $id?>">

                <label>Nome do produto</label>
                <input type="text" name="nomeproduto" value="<?php echo $nomeproduto?>"><br/><br/>

                <label>Categoria</label>
                <select name="categoria">

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
                <input type="number" name="quantidade" value="<?php echo $quantidade?>"><br/><br/>

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

                <button type="submit" id="botao">Atualizar</button>

            <?php } ?>
        </form>

</body>

</html>