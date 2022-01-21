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
        foreach ($excel->rows() as $key => $row) {
            $i=0;
            //echo"<pre>";print_r ($row);
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
            }
        }
    }
}




























































































