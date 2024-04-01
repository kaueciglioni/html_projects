<html>

<head>
    <title>Hello</title>
</head>

<body>
<h1>Calculadora</h1>
<form action="calcular.php" method="POST">
    <label>Valor: <br/>
    <input type="text" name="v1"><br/>
    <label>Valor: <br/>
    <input type="text" name="v2"><br/>
    <label>Resultado: <br/>
    <input type="text" name="resultado" value="<?php echo(isset($_GET["res"])?$_GET["res"]:""); ?>">
    <br/>
    <input type="submit" value="Somar"><br/>

</form>
</body>

</html>