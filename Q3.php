<?php
    $a = 8;
    $b = 4;
    echo F();
    $a = $a + 1;
    function F()
    {
        global $a;
        $b=3;
        return ($a*$b);
    }
    ?>