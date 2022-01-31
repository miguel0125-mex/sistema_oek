<?php
include_once "conexion.php";
$objeto = new Conexion();
$conexion = $objeto->Conectar();
//CHECAR SI LA CONEXION ES EXISTOSA
/*
if($conexion){
    echo "estas conectado";
}*/
$allowedFileType=['text/txt', 'text/csv', 'text/plain'];
if(in_array($_FILES["file"]["type"],$allowedFileType)){
    $targetPath = 'subidas/'.$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],$targetPath);
    echo "archivo movido";

    $archivo = $targetPath;
    //ABRIR EL ARCHIVO TXT
    $archivo_open = fopen($archivo, 'r');

    //SE RECORRE EL ARCHIVO
    while(feof($archivo_open)==false){
        //LEE CADA LINEA DEL ARCHIVO
        $linea = fgets($archivo_open);
        //SEPARAMOS CADA LINEA CON ","
        $data = explode(',', $linea);
        echo "<pre>"; print_r($data);
    };
    //PREPARAR SENTENCIA SQL
    //$t_sql = "";
}
fclose($archivo_open);
//$nombre = ($_FILES['file']['name']);

//echo ($nombre);