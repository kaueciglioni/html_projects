<html>
    <head>
        <title>Hello</title>
    </head>


<body>

    <?php
        /*coment/* 

        #######  INTRODUÇÃO - ECHO - VARIÁVEL - FUNÇÕES #######
        ========================================================

        $numero = 1.25;
        $t = `time`;
        echo('Valor da variável $numero<br>');
        echo("Valor da variável $numero<br>");
        echo("<h1>$t<h1>");

        $str = "abc";
        echo ("$str[1]<br>");
        $str[0] = "X";
        echo("$str");
        $str2 = "wyz";
        $c = $str . $str2
        echo("<br>$c"); 
        

        ###### INTRODUÇÃO IF, ELSE, WHILE #####
        =======================================================

        $a = 10;
        $b = 5;
        if($a > $b) {
            echo("$a é maior que $b");
        }
        else {
            echo("$b é maior que $a");
        }
        echo("<br>");
        $i = 1;
        while($i <= 10) {
            echo("Valor $i<br>");
            $i++;
        }

        */
        

            for($i = 1; $i <= 10; $i++){
                for($j = 1; $j <= 10; $j++){
                    $r = $i * $j;
                    echo("$i X $j = $r<br>");
                }
                echo("_______________<br>");
            }
        function fatorial($num){
            if($num < 2){
                return 1;
            }
            return $num * fatorial($num-1);
        }
        
        $n = fatorial(5);
        echo("<br>$n<br>");
    
    ?>
</body>
</html>