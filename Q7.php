<?php
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];
    
    $altura2 = $altura * $altura;
    $IMC = $peso/$altura2;

    if($IMC < 18.5){
        printf("abaixo do peso");}
    elseif(($IMC >= 18.6) && ($IMC<=24.9)){
        printf("Peso ideal (parabéns)");
    }elseif(($IMC >= 25.0)&&($IMC<=29.9)){
        printf("Levemente acima do peso");
    }elseif(($IMC >= 30.0)&&($IMC<=34.9)){
        printf("Obesidade grau 1");
    }elseif(($IMC >= 35.0)&&($IMC<=39.9)){
        printf("Obesidade grau II (Severa)");
    }else{
        printf("Obesidade III (mórbida)");
    }
    ?>