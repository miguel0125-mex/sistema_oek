<?php
include_once "conexion.php";

$allowedFileType=['text/txt', 'text/csv', 'text/plain'];
if(in_array($_FILES["file"]["type"],$allowedFileType)){
    $targetPath = 'subidas/'.$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],$targetPath);
    echo "archivo movido";
}
//$nombre = ($_FILES['file']['name']);

//echo ($nombre);