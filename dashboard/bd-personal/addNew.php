<?php
include_once '../bd-personal/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

if(isset($_POST['add'])){
            $numEmpleado = $_POST['numEmpleado'];
            $nombre = $_POST['nombre'];
            $aPaterno = $_POST['aPaterno'];
            $aMaterno = $_POST['aMaterno'];
            $edad = $_POST['edad'];
            $fNacimiento = $_POST['fNacimiento'];
            $genero = $_POST['genero'];
            $direccion = $_POST['direccion'];
            $estado = $_POST['estado'];
            $provincia = $_POST['provincia'];
            $cPostal = $_POST['cPostal'];
            $curp = $_POST['curp'];
            $rfc = $_POST['rfc'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $escolaridad = $_POST['escolaridad'];
            $puesto = $_POST['puesto'];
            $sql = "INSERT INTO personal(id, num_empleado, nombre, ap_paterno, ap_materno, edad, fech_nacimiento, sexo, domicilio, estado, provincia, cod_postal, CURP, RFC, num_tel, correo, escolaridad, puesto) VALUES (NULL,:numEmpleado, :nombre, :aPaterno, :aMaterno, :edad, :fNacimiento, :genero, :direccion, :estado, :provincia,:cPostal ,:curp ,:rfc , :telefono, :correo, :escolaridad, :puesto)";

            $resultado = $conexion ->prepare($sql);
            $resultado->bindParam(':numEmpleado', $numEmpleado, PDO::PARAM_STR, 25);
            $resultado->bindParam(':nombre', $nombre, PDO::PARAM_STR, 25);
            $resultado->bindParam(':aPaterno', $aPaterno, PDO::PARAM_STR, 25);
            $resultado->bindParam(':aMaterno', $aMaterno, PDO::PARAM_STR, 25);
            $resultado->bindParam(':edad', $edad, PDO::PARAM_STR, 25);
            $resultado->bindParam(':fNacimiento', $fNacimiento, PDO::PARAM_STR, 25);
            $resultado->bindParam(':genero', $genero, PDO::PARAM_STR, 25);
            $resultado->bindParam(':direccion', $direccion, PDO::PARAM_STR, 25);
            $resultado->bindParam(':estado', $estado, PDO::PARAM_STR, 25);
            $resultado->bindParam(':provincia', $provincia, PDO::PARAM_STR, 25);
            $resultado->bindParam(':cPostal', $cPostal, PDO::PARAM_STR, 25);
            $resultado->bindParam(':curp', $curp, PDO::PARAM_STR, 25);
            $resultado->bindParam(':rfc', $rfc, PDO::PARAM_STR, 25);
            $resultado->bindParam(':telefono', $telefono, PDO::PARAM_STR, 25);
            $resultado->bindParam(':correo', $correo, PDO::PARAM_STR, 25);
            $resultado->bindParam(':escolaridad', $escolaridad, PDO::PARAM_STR, 25);
            $resultado->bindParam(':puesto', $puesto, PDO::PARAM_STR, 25);

            $resultado -> execute();
            $conexion = null;
        
}

header('location: ../verEmpleados.php');
