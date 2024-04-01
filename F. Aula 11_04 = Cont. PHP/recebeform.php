<html>

<head>

</head>

<body>

    <?php
    echo "Olá ".$_POST["nome"]. " ".$_POST["sobrenome"]."!";
    $idade = $_POST["idade"];
    if ($idade == "s") {
        echo "<br> Acesso Liberado!";
    } 
    elseif ($idade == "n") {
        echo "<br> Acesso Negado. Menor de idade!";
    } 
    else {
        echo "<br> Selecione uma idade";
    }

    $clube = $_POST["time"];
    echo "<br><br> Você não gosta dos seguintes times: <br>";
    foreach($clube as $t) {
        echo "<br/>".$t;
    }
    ?>

</body>

</html>