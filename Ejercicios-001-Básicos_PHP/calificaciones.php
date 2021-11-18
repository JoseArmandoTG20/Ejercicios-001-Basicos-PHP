<?php
    $califi = intval($_REQUEST["calificacion"]);
    if($califi >= 0 and $califi < 11){
        if($califi >= 0 and $califi < 3){
            echo "<h1>. </h1>";
            echo "<h1>Muy deficiente.</h1>";
        }elseif($califi >= 3 and $califi < 5){
            echo "<h1>Insuficiente.</h1>";
        }elseif($califi >= 5 and $califi < 6){
            echo "<h1>Suficiente.</h1>";
        }elseif($califi >= 6 and $califi < 7){
            echo "<h1>Bien.</h1>";
        }elseif($califi >= 7 and $califi < 9){
            echo "<h1>Notable.</h1>";
        }elseif($califi >= 9 and $califi <= 10){
            echo "<h1>Sobresaliente.</h1>";
        }
    }else{
        echo "<h1> Ingrese una Calificacion del 0 al 10, Por Favor. </h1>";
    }
?>
