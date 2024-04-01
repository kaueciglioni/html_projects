<HTML>
<HEAD>
    <META charset="UTF-8">

<STYLE>
    .erro { color: red; }
</STYLE>

</HEAD>

<BODY>

<p class="erro">
    <?php
    
    if(isset($_GET["erro"])) {
        if($_GET["erro"] == 1) {
            echo "Login e senha inválidos";
        }
        if($_GET["erro"] == 2) {
            echo "Efetue login novamente";
        }
    }

    ?>
</p>

<form action = "verificalogin.php" method = "POST">
    <label>Usuário: </label><br/>
    <input type="text" name="usuario"/><br/>
    <label>Senha: </label><br/>
    <input type="password" name="senha"/><br/>
    <input type="checkbox" name="lembrar" value="S"/> Lembrar senha<br/>
    <input type="submit"value="Login"/>
</form>


</BODY>
</HTML>