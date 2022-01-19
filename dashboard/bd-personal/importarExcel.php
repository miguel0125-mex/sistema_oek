<?php
include_once "conexion.php";

$objeto = new Conexion();
$conexion = $objeto->Conectar();

require_once('../../spreadsheet-reader/php-excel-reader/excel_reader2.php');
require_once('../../spreadsheet-reader/SpreadsheetReader.php');

$i =0;
$sql = "INSERT INTO personal(id, num_empleado, nombre, ap_paterno, ap_materno, edad, fech_nacimiento, sexo, domicilio, estado, provincia, cod_postal, CURP, RFC, num_tel, correo, escolaridad, puesto) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

if(isset($_POST['import'])){
    $allowedFileType=['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
    if(in_array($_FILES['file']['type'], $allowedFileType)){
        $targetPath = 'subidas/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        $Reader = new SpreadsheetReader($targetPath);
        $sheetCount = count($Reader->sheets());
        $resultado = $conexion ->prepare($sql);
        $resultado -> bindParam(1, $numEmpleado);
            $resultado -> bindParam(2, $nombre);
            $resultado -> bindParam(3, $aPaterno);
            $resultado -> bindParam(4, $aMaterno);
            $resultado -> bindParam(5, $edad);
            $resultado -> bindParam(6, $fNacimiento);
            $resultado -> bindParam(7, $genero);
            $resultado -> bindParam(8, $domicilio);
            $resultado -> bindParam(9, $estado);
            $resultado -> bindParam(10, $provincia);
            $resultado -> bindParam(11, $cPostal);
            $resultado -> bindParam(12, $curp);
            $resultado -> bindParam(13, $rfc);
            $resultado -> bindParam(14, $telefono);
            $resultado -> bindParam(15, $correo);
            $resultado -> bindParam(16, $escolaridad);
            $resultado -> bindParam(17, $puesto);
        for($i=2;$i<$sheetCount;$i++){
            $Reader->ChangeSheet($i);
            foreach ($Reader as $Row) {
                $numEmpleado = $Row[0];
                $nombre = $Row[1];
                $aPaterno = $Row[2];
                $aMaterno = $Row[3];
                $edad = $Row[4];
                $fNacimiento = $Row[5];
                $genero = $Row[6];
                $domicilio = $Row[7];
                $estado = $Row[8];
                $provincia = $Row[9];
                $cPostal = $Row[10];
                $curp = $Row[11];
                $rfc = $Row[12];
                $telefono = $Row[13];
                $correo = $Row[14];
                $escolaridad = $Row[15];
                $puesto = $Row[16];
                if(!empty($numEmpleado)||!empty($curp)){
                   
                    $resultado->execute();
                }
            }
        }
    }
}

/*
include('simplexlsx.php');

if(isset($_POST['import'])){
    $allowedFileType=['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

    if(in_array($_FILES['file']['type'], $allowedFileType)){
        $targetPath = 'subidas/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        if(file_exists($targetPath)){
            //echo "el archivo existe";
            $xlsx = new SimpleXLSX($targetPath);

            $sql = "INSERT INTO personal(id, num_empleado, nombre, ap_paterno, ap_materno, edad, fech_nacimiento, sexo, domicilio, estado, provincia, cod_postal, CURP, RFC, num_tel, correo, escolaridad, puesto) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $resultado = $conexion ->prepare($sql);

            $resultado -> bindParam(1, $numEmpleado);
            $resultado -> bindParam(2, $nombre);
            $resultado -> bindParam(3, $aPaterno);
            $resultado -> bindParam(4, $aMaterno);
            $resultado -> bindParam(5, $edad);
            $resultado -> bindParam(6, $fNacimiento);
            $resultado -> bindParam(7, $genero);
            $resultado -> bindParam(8, $domicilio);
            $resultado -> bindParam(9, $estado);
            $resultado -> bindParam(10, $provincia);
            $resultado -> bindParam(11, $cPostal);
            $resultado -> bindParam(12, $curp);
            $resultado -> bindParam(13, $rfc);
            $resultado -> bindParam(14, $telefono);
            $resultado -> bindParam(15, $correo);
            $resultado -> bindParam(16, $escolaridad);
            $resultado -> bindParam(17, $puesto);

            foreach($xlsx->rows() as $fila){
                if($fila > 1){
                    $numEmpleado = $fila[0];
                    $nombre = $fila[1];
                    $aPaterno = $fila[2];
                    $aMaterno = $fila[3];
                    $edad = $fila[4];
                    $fNacimiento = $fila[5];
                    $genero = $fila[6];
                    $domicilio = $fila[7];
                    $estado = $fila[8];
                    $provincia = $fila[9];
                    $cPostal = $fila[10];
                    $curp = $fila[11];
                    $rfc = $fila[12];
                    $telefono = $fila[13];
                    $correo = $fila[14];
                    $escolaridad = $fila[15];
                    $puesto = $fila[16];
                }
                if(!empty($numEmpleado)||!empty($curp)){
                    $resultado->execute();
                }
                
            }
        }else{
            echo "el fichero no existe";
        }
    }
    header('location: ../verEmpleados.php');
    //echo ($documento);
}
*/