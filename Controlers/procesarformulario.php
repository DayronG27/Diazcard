<?php
require_once ('../config/conexion.php');  //anclaje a conexion.php  
//aqui proceso las variables del html con php 
print_r($_POST);
echo "<br>";
print_r($_FILES);
$documento         = trim($_POST['documento']);

//crea una carpeta con el numero de documento
mkdir("../imgs/".$documento,0777);
$archivo_temporal= $_FILES['imagen']['tmp_name'];
$archivo_destino= "../imgs/".$documento."/foto_perfil.jpg";

copy($archivo_temporal,$archivo_destino);




$nombre            = trim($_POST['nombre']);       //con trim elimino espacios  al inicio y al final que ingrese el usuario en la interfaz
$celular           = trim($_POST['celular']);     //$son las variables [''] captura lo que ingresa el usuario en la interfaz
$correo            = trim($_POST['correo']);
$tipodocumento     = ($_POST['tipodocumento']);





if (strlen($nombre) >= 1 && strlen($documento) >= 1 &&  strlen($nombre) >= 1 && strlen($celular) >= 1  && strlen($correo) >= 1) {
    $consulta = "INSERT INTO usuarios (nombre,celular,correo,documento,tipodocumento) 
VALUES ('$nombre','$celular','$correo','$documento','$tipodocumento')";   //inserto en la tabla usuarios en los campos (), lo que el usuarios ingresa en las variables $


    $resultado = mysqli_query($conn,$consulta); //mysqli_query consulta a la base de datos              

    if ($resultado)  mysqli_query($conn, $consulta);
    if ($resultado) {
        echo "se ha guardado el registro";
    } else {
        echo "no se guardara en la base de datos";
    }
}
