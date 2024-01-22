<?php
//Ejercicio php : almacenar en un array las notas de un alumno , visualizar aquellas notas que sean superiores a la media 



$tab_notas = array ("1eval"=>6 ,"2eval"=>7,"3eval"=>8);

// Funciones

function Media ($tab) {
    $suma = 0;
    foreach ($tab as $valor){
        $suma += $valor;
    }
    $media = $suma / count ($tab);
    return $media;
}

function Visualizar ($dato){
   echo $dato;
}

// Programa principal

Visualizar (Media($tab_notas));




?>