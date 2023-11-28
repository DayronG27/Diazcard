<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro personas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/usuarios.css">
</head>

<body>
    <?php
    require_once('../config/conexion.php');
    $id = $_GET ['id'];
    
    $consulta= "SELECT * FROM usuarios WHERE id =$id";
    $resultado = mysqli_query($conn,$consulta);
    
    if (mysqli_num_rows($resultado)) {
        while ($usuarios=mysqli_fetch_assoc($resultado)){ 
        $nombre = $usuarios['nombre'];
        $celular         =$usuarios['celular'];
        $correo          =$usuarios ['correo'];
        $documento       =$usuarios['documento'];
        $tipodocumento   =$usuarios['tipodocumento'];
        }

   }
   echo $celular;
        
    
    ?>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <h1>Registro usuario</h1>
                <form action="actualizarusuario.php" method="POST"> <!-- anclaje a archivo procesarformulario.php -->
                <input type="text" name="id" id="id" value="<?=$id?>" hidden>   
                <div class="mb-3">
                        <input type="text" name="nombre" id="nombre" value="<?=$nombre?>">
                    </div>

                    <div class="mb-3">
                        <input type="email" name="correo" id="correo" value="<?=$correo?>">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="celular" id="celular" value="<?=$celular?>">
                    </div>
                    <div class="mb-3">
                        <input type="numb" name="documento" id="documento"value="<?=$documento?>" >
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="tipodocumento" id="tipodocumento" >

                            <option value="1" <?= $tipodocumento ==1 ? 'selected' : '' ?>>C.C</option>
                            <option value="2"<?=$tipodocumento ==2 ? 'selected' : ''?>>T.I</option>
                            <option value="3"<?=$tipodocumento ==3 ? 'selected' : ''?>>C.E</option>

                        </select>
                    </div>
                  


                    <br> <br>
                    <input class="btn btn-outline-primary" type="submit" value="Enviar" class="submit">
                </form>
            </div>
</body>

</html>