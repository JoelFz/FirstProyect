<?php

$id = $_POST['id'];//declaro varibales del id
$usuario = $_POST['user'];//declaro la variable de usuario

include './conec.php';//Incluyo la conexion

$sql = "INSERT INTO usuarios VALUES ('".$id."','".$usuario."')";//Establesco la insercion

$result = mysqli_query($con, $sql) or die('No se pudo ejecutar la consulta');//Ejecuto la consulta
if($result){
    echo 'Datos insertados';
}

mysqli_close($con);

