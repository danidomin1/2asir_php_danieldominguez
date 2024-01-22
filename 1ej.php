<?php
//Ejercicio php : almacenar en un array las notas de un alumno , visualizar aquellas notas que sean superiores a la media 


$tab_notas = array (5,6,7,8,9,10);

// Funciones

function Media ($tab) {
    $suma = 0;
    foreach ($tab as $valor){
        $suma += $valor;
    }
    $media = $suma / count ($tab);
    return $media;
}

function Visualizar ($med, $tab){
    foreach ($tab as $valor){
        if ($valor > $med){
            echo $valor . " ";
        }
    }
}

// Programa principal

Visualizar (Media($tab_notas), $tab_notas);

?>