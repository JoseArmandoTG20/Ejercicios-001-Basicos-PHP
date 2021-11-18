<?php
    if(intval($_REQUEST["edad"]) >= 18){
        echo "<h1> Felicidades, Puedes Manejar. </h1>";
    }else{
        echo "<h1> Suerte para la Proxima. </h1>";
    }
?>
