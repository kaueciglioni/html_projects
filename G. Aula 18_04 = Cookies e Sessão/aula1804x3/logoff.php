<?php

session_start();

if (isset($_SESSION["autenticacao"]) && isset($_SESSION["usuario"]) ) {
    unset($_SESSION["autenticacao"]);
    unset($_SESSION["usuario"]);
}
header("Location: login.php");

?>