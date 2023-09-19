<?php
require_once '../../config/conexion.php';  //anclaje a conexion.php  
//aqui proceso las variables del html con php 

$tipodocumento     = ($_POST['tipodocumento']);
$documento         = trim($_POST['documento']);
$nombre            = trim($_POST['nombre']);       //con trim elimino espacios  al inicio y al final que ingrese el usuario en la interfaz
$celular           = trim($_POST['celular']);     //$son las variables [''] captura lo que ingresa el usuario en la interfaz
$correo            = trim($_POST['correo']);

if (strlen($nombre) >= 1 && strlen($documento) >= 1 &&  strlen($nombre) >= 1 && strlen($celular) >= 1  && strlen($correo) >= 1) {
    $consulta = "INSERT INTO usuarios (tipodocumento,documento,nombre,celular,correo) 
VALUES ('$tipodocumento','$documento','$nombre','$celular','$correo')";   //inserto en la tabla usuarios en los campos (), lo que el usuarios ingresa en las variables $


    $resultado = mysqli_query($conn, $consulta); //mysqli_query consulta a la base de datos              

    if ($resultado)  mysqli_query($conn, $consulta);
    if ($result) {
        echo "se ha guardado el registro";
    } else {
        echo "no se guardara en la base de datos";
    }
}
