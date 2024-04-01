function verificar (){
    try {
        var x = document.getElementById("valor").value;
        if (x == "") throw "Campo Vazio";
        if (isNaN(x)) throw "não é um numero válido";
        if (x > 10) throw "Alto demais";
        if (x < 5) throw "Baixo demais";
        document.getElementById("mesg").innerHTML = "Numero aceito!";

    } catch (err) {
        var y = document.getElementById("mesg");
        y.innerHTML = "Erro:" + err + ".";

    }
}