<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Pesquisar medicamentos</title>

</head>
<body>


    <div class="container" style="margin-top: 40px">

        <center>
            <h3>Lista de Medicamentos</h3>
        </center>
        <br>
        <br>
        <table class="table" id="table_id">
            <thead>
                <tr>
                    <th scope="col">Nome Comercial</th>
                    <th scope="col">Princípio Ativo</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Dosagem</th>
                    <th scope="col">É genérico?</th>
                    <th scope="col">É controlado?</th>
                    <th scope="col" style="min-width: 148px;">
                        <center>Ação</center>
                    </th>
                </tr>
            </thead>


            <?php

            if(!isset($_POST['filtro'])){
                $filtro = "";
            }
            else {
                $filtro = $_POST['filtro'];
            }

            include 'conexao.php';
            $sql = "SELECT * FROM `medicamentos` where (`nome` like '%$filtro%') or (`principio` like '%$filtro%') or (`fabricante` like '%$filtro%');";
            $busca = mysqli_query($conexao,$sql);

            while ($array = mysqli_fetch_array($busca)) {
                
                $id_medicamento = $array['id_medicamento'];
                $nome = $array['nome']; 
                $principio = $array['principio'];
                $fabricante = $array['fabricante'];
                $tipo = $array['tipo'];
                $dosagem = $array['dosagem'];
                $generico = $array['generico'];
                $controlado = $array['controlado'];

        ?>
            <tr>
                <td style="vertical-align: inherit;"> <?php echo $nome ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $principio ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $fabricante ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $tipo ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $dosagem ?> </td>
                <td style="vertical-align: inherit;"> 
                    <?php if ($generico == 1) {
                        echo "Sim";
                        }
                        else {
                            echo "Não";
                        }
                    ?> </td>
                <td style="vertical-align: inherit;">                     
                    <?php if ($controlado == 1) {
                        echo "Sim";
                        }
                        else {
                            echo "Não";
                        }
                    ?> </td>
                <td style="vertical-align: inherit;">
                    <center>
                        <a href="editar_medicamento.php?id=<?php echo $id_medicamento ?>" role="button" class="btn btn-warning btn-sm"><i class="far fa-edit"></i>&nbsp; Editar</a>

                        <a href="_excluir_medicamento.php?id=<?php echo $id_medicamento ?>" role="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>&nbsp; Excluir</a>
                    </center>
                </td>
            <?php } ?>
            </tr>
        </table>

        <div style="text-align: right; margin-top:20px;">
            <a href="create_medicamento.php" role="button" class="btn btn-success btn-sm">Cadastrar medicamento</a>
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
        </div>

    </div>


    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>

    <script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro encontrado",
                "infoFiltered": "(Filtrado de _MAX_ registros totais)",
                "search": "Pesquisar:"
            }
        });
    });
    </script>

</body>

</html>