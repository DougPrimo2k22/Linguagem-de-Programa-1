<?php
    $valor1=$_GET["valor1"];
    $valor2=$_GET["valor2"];

    if($valor1>$valor2){
        echo "o maior valor é ".$valor1;
    }elseif($valor1 < $valor2){
        echo "<br/> o menor valor é ".$valor1;
    }else{
        echo"Os dois valores são iguais a ".$valor1;
    }
    ?>