<html>

<head>

</head>

<body>
    <form action="recebeform.php" method="POST">
        <label>Nome: <br/>
            <input type="text" name="nome"><br/>
            <label>Sobrenome: <br/>
                <input type="text" name="sobrenome"><br/>
                <label>Você tem mais do que 18?</label><br/>
                <input type="radio" value="s" name="idade">Sim<br/>
                <input type="radio" value="n" name="idade">Não<br/>

                <label>Clube que não gosta: <br/>
                <input type="checkbox" name="time[]" value="Corinthians">Corinthians<br/>
                <input type="checkbox" name="time[]" value="Palmeiras">Palmeiras<br/>
                <input type="checkbox" name="time[]" value="Santos">Santos<br/>
                <input type="checkbox" name="time[]" value="Flamengo">Flamengo<br/>
                <input type="checkbox" name="time[]" value="São Paulo">São Paulo<br/>


                <input type="submit" name="enviar"><br />

            </label>

    </form>


</body>

</html>