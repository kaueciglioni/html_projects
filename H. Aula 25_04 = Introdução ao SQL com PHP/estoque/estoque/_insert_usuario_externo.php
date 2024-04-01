<?php 

include 'conexao.php';
include 'script/password.php'; 

$nomeusuario = $_POST['nome'];
$mail = $_POST['mail'];
$senha = $_POST['senha'];
$status = 'Ativo';

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES ('$nomeusuario','$mail',md5('$senha'), 1, '$status')";

$inserir = mysqli_query($conexao, $sql);

?>


<h4>Usuário cadastrado com sucesso,</h4>
<br/>
<a href="index.php">Voltar ao início</a>
