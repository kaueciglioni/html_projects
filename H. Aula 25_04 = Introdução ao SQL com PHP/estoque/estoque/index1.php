<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT `mail_usuario`, `senha_usuario` FROM `usuarios` WHERE `mail_usuario` = '$usuario' and `status` = 'Ativo' ";
$buscar = mysqli_query($conexao, $sql); //executa_query

$total = mysqli_num_rows($buscar); //consulta numero de emails na base.

if ($total <= 0) {
    header('Location: erro.php');
}

else {
    while ($array = mysqli_fetch_array($buscar)){ //ATRIBUI CONSULTA A VARIAVEL
        $senha = $array['senha_usuario']; 
        
        $senhadecode = md5($senhausuario);

        if ($senhadecode == $senha) {

            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: menu.php');
    
        } else { 
            header('Location: erro_senha.php');
        }
    }
}

?>