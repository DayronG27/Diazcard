<?php
require_once '../../config/conexion.php';
$consulta = ("SELECT * FROM usuarios");   
$resultado = mysqli_query($conn,$consulta);   //todooo lo que llega a la tabla usuarios por medio de la conexion ($conn) en la tabla ($cosulta) sera almacenado en la variable result

?>
