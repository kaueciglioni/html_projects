<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

</head>

<body>

<form action="_insert_usuario_externo.php" method="post">

        <label>Nome do usuário</label>
        <input type="text" name="nome" placeholder="Nome completo" autocomplete="off" required><br/><br/>

        <label>E-mail</label>
        <input type="email" name="mail" placeholder="Seu e-mail" autocomplete="off" required><br/><br/>

        <label>Senha</label>
        <input id="txtSenha" type="password" name="senha" placeholder="Sua senha" autocomplete="off" required><br/><br/>

        <label>Confirmar senha</label>
        <input type="password" name="senha2" placeholder="Confirme sua senha" autocomplete="off" required oninput="validaSenha(this)"><br/><br/>
        <small>Precisa ser igual a senha digitada acima.</small><br/><br/>

        <a href="index.php">Voltar</a>
        <br/>
        <button type="submit" id="botao">Cadastrar</button>
</form>


<script>
function validaSenha(input) {
    if (input.value != document.getElementById('txtSenha').value) {
        input.setCustomValidity('Repita a senha corretamente');
    } else {
        input.setCustomValidity('');
    }
}
</script>

</body>

</html>