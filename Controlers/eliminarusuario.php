<?php
require_once '../config/conexion.php';  //anclaje a conexion.php  
//aqui proceso las variables del html con php 
$id=$_GET['id'];

$consulta= "DELETE FROM usuarios WHERE id=$id";
$resultado = mysqli_query($conn,$consulta);

if ($resultado) {
    header("location: index.php");
}else {
    echo "error al guardar el registro";
 }