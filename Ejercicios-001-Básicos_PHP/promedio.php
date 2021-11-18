<?php
    $promedio = 0;
    foreach ($_REQUEST["calificacion"] as $key => $value){
        $promedio += intval($value);
    }
    $promedio = $promedio/10;

    echo "<h1> Su Promedio es de: $promedio </h1>";
?>