<HTML>
<HEAD>
    <META charset="UTF-8">

    <STYLE>
        body {
            background-color: <?php echo $_COOKIE["cor"]; ?>;
        }
    </STYLE>

</HEAD>

<BODY>

<?php

setcookie("nome", "Edilson Rodrigues", time() + (30));
setcookie("cor", "blue");

?>

<p><a href = "testarcookie.php">Testar Cookie</a></p>

</BODY>
</HTML>