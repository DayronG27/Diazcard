<?php
require_once '../config/conexion.php';  //anclaje a conexion.php  
//aqui proceso las variables del html con php 

$id                =$_POST['id'];
$nombre            = trim($_POST['nombre']);       //con trim elimino espacios  al inicio y al final que ingrese el usuario en la interfaz
$celular           = trim($_POST['celular']);     //$son las variables [''] captura lo que ingresa el usuario en la interfaz
$correo            = trim($_POST['correo']);
$documento         = trim($_POST['documento']);
$tipodocumento     = ($_POST['tipodocumento']);


if (strlen($nombre) >= 1 && strlen($documento) >= 1 &&  strlen($celular) >= 1) { 
  
  $consulta = "UPDATE usuarios 
    SET nombre='$nombre',celular='$celular',correo='$correo',documento='$documento',tipodocumento='$tipodocumento' 
WHERE id = $id";

$resultado = mysqli_query($conn,$consulta);
 if ($resultado) {
    header("location: index.php");
 }else {
    echo "error al guardar el registro";
      } 
} else {
    echo "se guardo correctamente";
}