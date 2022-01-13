<?php
include_once '../bd-personal/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$aPaterno = (isset($_POST['aPaterno'])) ? $_POST['aPaterno'] : '';
$aMaterno = (isset($_POST['aMaterno'])) ? $_POST['aMaterno'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$fNacimiento = (isset($_POST['fNacimiento'])) ? $_POST['fNacimiento'] : '';
$genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
$curp = (isset($_POST['curp'])) ? $_POST['curp'] : '';
$rfc = (isset($_POST['rfc'])) ? $_POST['rfc'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$provincia = (isset($_POST['provincia'])) ? $_POST['provincia'] : '';
$cPostal = (isset($_POST['cPostal'])) ? $_POST['cPostal'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$escolaridad = (isset($_POST['escolaridad'])) ? $_POST['escolaridad'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO ";

}

/*
$consulta = 'SELECT * FROM personal';
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;*/