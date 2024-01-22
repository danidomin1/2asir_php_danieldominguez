<?php
//Ejercicio php : dado un array sociativo alternar el contenido por el opuesto 

$numero = $_POST['numero'];

// Funciones

function Proceso (&$num){
    $num = $num * (-1);
    return $num;
}

function Visualizar($dato){
    echo $dato;
    
}
// Programa principal
Proceso ($numero);
Visualizar ($numero);


?>