<?php

if(!isset($_COOKIE["nome"])) {
    echo "Cookie não existe";
}
else{
    echo "Olá ".$_COOKIE["nome"]." !";
}

echo "<br/><br/>";

$tempomax = time() + 60;
if(isset($_COOKIE["qtde"])) {
    echo "Você visitou essa página ".$_COOKIE["qtde"]." vezes";
    setcookie("qtde", $_COOKIE["qtde"] + 1, $tempomax);
}
else {
    echo "Essa é sua primeira visita!";
    setcookie("qtde", 1, $tempomax);
}

?>