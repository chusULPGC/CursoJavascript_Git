<?php

$el_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$el_array = new stdClass();

if ($el_usuario == "Juan") {

    $el_array->Nombre = "Juan";
    $el_array->Apellido = "Gómez";
    $el_array->Edad = "18";
    $json = json_encode($el_array);
    echo $json;
}else if($el_usuario=="María"){
    $el_array->Nombre = "María";
    $el_array->Apellido = "Fernández";
    $el_array->Edad = "27";
    $json = json_encode($el_array);
    echo $json;
    
}else if($el_usuario=="Antonio"){
    $el_array->Nombre = "Antonio";
    $el_array->Apellido = "García";
    $el_array->Edad = "33";
    $json = json_encode($el_array);
    echo $json;
    
}
?>