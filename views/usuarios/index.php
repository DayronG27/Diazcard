<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro personas</title>
   <link rel="stylesheet" href="../../css/usuarios.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>


   <?php

   require_once('procesartablausuarios.php');
   ?>

   <div class="container">

      <div class="row">
         <div class="col">
            <h1>Registro usuario</h1>
            <form action="procesarformulario.php" method="POST"> <!-- anclaje a archivo procesarformulario.php -->

               <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" class="box">



               <input type="email" name="correo" id="correo" placeholder="Correo electronico" class="box">


               <input type="tel" name="celular" id="celular" placeholder="Celular" class="box">

               <input type="numb" name="documento" id="documento" placeholder="numero de documento" class="box">
               <div class="select">
                  <select class="form-control" name="tipodocumento" id="tipodocumento">

                     <option value="1">C.C</option>
                     <option value="2">T.I</option>
                     <option value="3">C.E</option>

                  </select>
               </div>
               <br> <br>
               <input class="btn btn-outline-primary" type="submit" value="Enviar" class="submit">
            </form>


            <table class="table table-sm table-hover  ">
               <thead class="table-dark">
                  <tr>
                     <th scape="col"> # </th>
                     <th scape="col"> tipodocumento </th>
                     <th scape="col"> documento </th>
                     <th scape="col"> nombre </th>
                     <th scape="col"> celular </th>
                     <th scape="col"> correo </th>
                     <th scape="col"> fecha de registro </th>
                     <th scape="col" colspan="3"> opciones </th> <!--  3 columnas diferentes -->
                  </tr>
                  <!--  otro esta es una consulta  -->
               </thead>
               <tbody>
                  <?php
                  if (mysqli_num_rows($resultado) == 0) {
                  ?>
                     <tr>
                        <td>no hay informacion</td>
                     </tr>
                     <?php
                  } else {
                     $numero_registro = 1;
                     while ($usuarios = mysqli_fetch_assoc($resultado)) {
                        if ($usuarios['select'] = 1) {
                           $tipodocumento = "C.C";
                        } else {
                           $select = "T.I";
                        }



                        $date = date_create($usuarios['fecha_registro']);
                     ?>
                        <tr>
                           <th scope="row">
                              <?= $numero_registro ?>
                           </th>
                           <td>
                              <?= $usuarios['nombre'] ?>
                           </td> <!--abreviacion php   < ? ?> -->
                           <td>
                              <?= $usuarios['correo'] ?>
                           </td>
                           <td>
                              <?= $usuarios['celular'] ?>
                           </td>
                           <td>
                              <?= $usuarios['documento'] ?>
                           </td>
                           <td>
                              <?= $usuarios['celular'] ?>
                           </td>
                           <td>
                              <?= date_format($date, 'd,m,y') ?>
                           </td> <!--formatear la fecha dando dia me año-->
                           <td><a href="" class="btn btn-outline-info btn-sm">ver</a></td>
                           <td><a href="" class="btn btn-outline-warning btn-sm">editar</a></td>
                           <td><a href="" class="btn btn-outline-danger btn-sm">eliminar</a></td>
                        </tr>
                  <?php
                        $numero_registro++;
                     }
                  }
                  ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   </div>
   </div>
 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"></script>


</body>

<!--<div class="info">
          
          <img src="../../imgs/Persona.svg" class="img-1" alt="">
            <div class="location">
               <div class="icons">
                  <img src="../../imgs/gps.svg" alt="">
                  <p>Calle 5 # 2 - Tunja</p>
               </div>
        
                <div class="icons">
                  <img src="../../imgs/number.svg" alt="">
                  <p>3110221111</p>
               </div>
        
              <div class="icons">
                  <img src="../../imgs/email.svg" alt="">
                  <p>Diazcard@gmail.com</p>
               </div>
        </div>
   


        <div class="social">
           
             <img src="../../imgs/fa.svg" alt="">
             <img src="../../imgs/whatsaap.svg" alt="">
             <img src="../../imgs/ins.svg" alt=""> 
        </div>
     </div>
 </div>
</div>
</div>
</body>
</html>