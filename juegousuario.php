<?php

$id_user = $_POST['id1'];
$id_game = $_POST['id2'];

include './conec.php';

$sql = "INSERT INTO usuarios VALUES ('".$id1."','".$id2."')";

$result = mysqli_query($con, $sql) or die('No se pudo ejecutar la consulta');

if($result){
    echo 'Datos insertados';
}

