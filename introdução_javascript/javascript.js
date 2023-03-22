// ##### FUNÇÃO ALERTA DE BOTÃO, E TROCA DE TEXTO #######

//function traduzir() {
  //  var x = document.getElementById("p1");
    //x.innerHTML = "Hello Word!"
//}
//</script>


//<button type="button" onclick="traduzir();">
//TRADUZIR</button-->

//---------------------------------------------------------
// ######    FUNÇÃO TROCA DE IMAGEM    #######



//function trocaimagem(){
    //var elemento = document.getElementById("myimage");
    //if (elemento.src.match("pequno")) {
    //    elemento.src = "grande.png";
    //} else {
    //    elemento.src = "pequno.png";
   // }
//}
//------------------------------------------------------------

function soma(){

    var e1 = parseInt(document.getElementById("v1").value);
    var e2 = parseInt(document.getElementById("v2").value);
    document.getElementById("res").innerHTML = "RESULTADO: " + (e1 + e2);
}
function subtracao(){

    var e1 = parseInt(document.getElementById("v1").value);
    var e2 = parseInt(document.getElementById("v2").value);
    document.getElementById("res").innerHTML = "RESULTADO: " + (e1 - e2);
}
function multiplicacao(){

    var e1 = parseInt(document.getElementById("v1").value);
    var e2 = parseInt(document.getElementById("v2").value);
    document.getElementById("res").innerHTML = "RESULTADO: " + (e1 * e2);
}
function divisao(){

    var e1 = parseInt(document.getElementById("v1").value);
    var e2 = parseInt(document.getElementById("v2").value);
    document.getElementById("res").innerHTML = "RESULTADO: " + (e1 / e2);
}