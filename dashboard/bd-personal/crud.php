<?php
include_once '../bd-personal/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

if(isset($_POST['add'])){
    $nombre = ($_POST['nombre']);
    $aPaterno = ($_POST['aPaterno']);
    $aMaterno = ($_POST['aMaterno']);
    $edad = ($_POST['edad']);
    $fNacimiento = ($_POST['fNacimiento']);
    $genero = ($_POST['genero']);
    $curp = ($_POST['curp']);
    $rfc = ($_POST['rfc']);
    $direccion = ($_POST['direccion']);
    $estado = ($_POST['estado']);
    $provincia = ($_POST['provincia']);
    $cPostal = ($_POST['cPostal']);
    $telefono = ($_POST['telefono']);
    $email = ($_POST['email']);
    $escolaridad = ($_POST['escolaridad']);
    $numEmpleado = ($_POST['numEmpleado']);

   
    $id = ($_POST['id']);

    $consulta = "INSERT INTO personal (num_empleado, nombre, ap_paterno, ap_materno, edad, fech_nacimiento, sexo, domicilio, estado, provincia, cod_postal, CURP, RFC, num_tel, correo, escolaridad) VALUES ('$numEmpleado', '$nombre','$aPaterno', '$aMaterno', '$edad', '$fNacimiento','$genero', '$curp','$direccion','$estado','$provincia','$cPostal','$curp','$rfc','$telefono','$email', '$escolaridad')";
        
    $resultado = $conexion -> prepare($consulta);
    $resultado->execute();
    $data= $resultado->fetchAll(PDO::FETCH_ASSOC);

}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = null;


header('location: agregarEmpleados.php');

        
        

/*
$consulta = 'SELECT * FROM personal';
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;*/