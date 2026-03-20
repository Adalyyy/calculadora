<?php
    //Traemos la informacion
    $permisoinput=$_POST['permisoinput'];
    $permiso=str_split($permisoinput); 

    //elementos de una lista
    $digitos=count($permiso);
    //echo $digitos;

    if(!$digitos>3){
        echo "Longitud rango 3";

    }else{
        echo "Longitud pasa de 3";
    }
    

    //que solo acepte 3digitos

    //trabaja con un array para hacer cada elemento independiente
    //print_r($permiso);

    foreach($permiso as  $digito){
        echo $digito . "<br>";
    }




?>