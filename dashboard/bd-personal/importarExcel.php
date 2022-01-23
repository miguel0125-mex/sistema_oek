<?php
include_once "conexion.php";
include "../../vendor/simplexlsx/src/SimpleXLSX.php";

$objeto = new Conexion();
$conexion = $objeto->Conectar();

if(isset($_POST['import'])){
    $allowedFileType=['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
    if(in_array($_FILES['file']['type'], $allowedFileType)){
        $targetPath = 'subidas/'.$_FILES['file']['name'];
        //move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        $excel = SimpleXLSX::parse(($_FILES['file']['tmp_name']));
        //echo "<pre>";print_r($excel->rows());
        //echo "archivo movido";
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
        
        foreach ($excel->rows() as $key => $row) {
            if($key != 0){
                //echo"<pre>";print_r ($row);
                //foreach ($row as $key => $cells) {
                    //echo"<pre>";print_r ($cells);
                    $numEmpleado = $row[0];
                    $nombre = $row[1];
                    $aPaterno = $row[2];
                    $aMaterno = $row[3];
                    $edad = $row[4];
                    $fNacimiento = $row[5];
                    $genero = $row[6];
                    $domicilio = $row[7];
                    $estado = $row[8];
                    $provincia = $row[9];
                    $cPostal = $row[10];
                    $curp = $row[11];
                    $rfc = $row[12];
                    $telefono = $row[13];
                    $correo = $row[14];
                    $escolaridad = $row[15];
                    $puesto = $row[16];
                //}
                if(!empty($numEmpleado)||!empty($curp)){
                    $resultado->execute();
                }
                echo "<pre>"; print_r($numEmpleado);
            }
            /*
            foreach ($row as $key => $cells) {
                $q="";
                //echo"<pre>";print_r ($cells);
                
                
                if($i==0){
                    $q.=$cells."varchar(50)";
                }else{
                    $q.=$cells.",";
                }
                $i++;
                echo $q; echo "<br>";
                
            }*/
        }
    }
    header('location: ../verEmpleados.php');
}




























































































