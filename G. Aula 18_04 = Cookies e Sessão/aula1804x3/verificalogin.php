<?php
$login = $_POST["usuario"];
$senha = $_POST["senha"];

if ($login == "kaue" && $senha == "123456"){
    session_start();
    $_SESSION["usuario"] = $login;
    $_SESSION["autenticacao"] = true;
    header("Location: arearestrita.php");
}

else {
    header("Location: login.php?erro=1");
}
?>