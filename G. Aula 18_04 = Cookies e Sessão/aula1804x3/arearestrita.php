<?php
session_start();
if (!isset($_SESSION["autenticacao"]) || !isset($_SESSION["usuario"])){
    header("Location: login.php?erro=2");
}
?>
<HTML>
<HEAD>
    <META charset="UTF-8">
</HEAD>

<BODY>

<p>
<?php
    echo "Olá ".$_SESSION["usuario"].", seja bem vindo!<br/>";
?>

<a href="logoff.php">[Sair]</a>

</p>

</BODY>
</HTML>