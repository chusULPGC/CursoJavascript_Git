<?php

$nombre = $_GET['usuario'];
$el_array = new stdClass();
$user = "root";
$db = new PDO('mysql:host=127.0.0.1;dbname=cursojavascript', $user);
$db->exec('PRAGMA foreign_keys = ON;');
$res = $db->prepare("SELECT nombre,apellido,edad FROM usuarios WHERE nombre=?");
$res->execute(array($nombre));
$res->setFetchMode(PDO::FETCH_NAMED);
$datos = $res->fetchAll();



    $el_array->Nombre = $datos[0]['nombre'];
    $el_array->Apellido = $datos[0]['apellido'];
    $el_array->Edad = $datos[0]['edad'];
    $json = json_encode($el_array);
    echo $json;
  