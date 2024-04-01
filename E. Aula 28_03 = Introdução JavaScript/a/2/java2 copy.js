function validarForm() {
    var val = document.getElementById("valido");
    try {
        var x = document.forms["meuForm"]["nome"].value;
        if (x == null || x == "") {
            throw "O nome deve ser preenchido!";
        }
        var y = document.forms["meuForm"]["email"].value;
        var atpos = y.indexOf("@");
        var dotpos = y.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= y.length) {
            throw "Digite um e-mail válido!";
        }
        return true;
    } catch (err) {
        val.style.color = "#ff0000";
        val.innerHTML = "Erro: " + err;
        return false;
    }
}

