<?php
include_once '..dashboard/crud/bd-personal/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$f_inicial = (isset($_POST['f_inicial'])) ? $_POST['f_inicial'] : '';
$f_final = (isset($_POST['f_final'])) ? $_POST['f_final'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$status_dom = (isset($_POST['status_dom'])) ? $_POST['status_dom'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

$consulta = 'SELECT * FROM personal';
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;