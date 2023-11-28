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

   <header>

   </header>
   

      <?php
require_once ('../../Controlers/procesartablausuarios.php');
      ?>


      <div class="container">
         <div class="row">
            <div class="col-3">
               <h1>Registro usuario</h1>
               <form action="../../../controlers/procesarformulario.php" method="POST" autocomplete="off" enctype="multipart/form-data"> <!-- anclaje a archivo procesarformulario.php -->
               
               <div class="mb-3">
                  <select class="form-select" name="tipodocumento" id="tipodocumento">

                     <option value="1">C.C</option>
                     <option value="2">T.I</option>
                     <option value="3">C.E</option>

                  </select>
                   </div>
               
               <div class="mb-3">
                     <input type="numb" class="form-control" name="documento" id="documento" placeholder="Numero de documento">
                  </div>
               
                  <div class="mb-3">
                     <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre completo">
                  </div>

                  <div class="mb-3">
                     <input type="tel"  class="form-control" name="celular" id="celular" placeholder="Celular">
                  </div>
                  <div class="mb-3">
                     <input type="email"   class="form-control" name="correo" id="correo" placeholder="Correo electronico">
                  </div>
                  
                  
                  <div class="mb-3">
                     <label for="formFile" class="form-label">Cargar foto</label>
                     <input class="form-control" type="file" name="imagen" id="imagen" accept="img/png,img/jpeg"> 
                  </div>

                  <br> <br>
                  <input class="btn btn-outline-primary" type="submit" value="Enviar" class="submit">
               </form>
            </div>







            <div class="col-9">
               <table class="table table-sm table-hover">
                  <thead class="table-dark">
                     <tr>
                        <th scape="col"> # </th>
                        <th scape="col"> tipo documento </th>
                        <th scape="col"> documento </th>
                        <th scape="col"> nombre </th>
                        <th scape="col"> celular </th>
                        <th scape="col"> correo </th>
                        <th scape="col"> fecha de registro </th>
                        <th scape="col"> estado</th>
                        <th scape="col" colspan="3"> opciones </th> <!--  3 columnas diferentes -->
                     </tr>
                     <!--  otro esta es una consulta  -->
                  </thead>
            </div>

            <tbody>
               <?php
               if (mysqli_num_rows($resultado) == 0) {
               ?>
                  <tr>
                     <td colspan="9" class=text-center>no hay informacion</td>
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
                        <th>
                           <?= $numero_registro ?>
                        </th>
                        <td>
                           <?= $usuarios['tipodocumento'] ?>
                        </td> <!--abreviacion php   < ? ?> -->
                        <td>
                           <?= $usuarios['documento'] ?>
                        </td>
                        <td>
                           <?= $usuarios['nombre'] ?>
                        </td>
                        <td>
                           <?= $usuarios['celular'] ?>
                        </td>
                        <td>
                           <?= $usuarios['correo'] ?>
                        </td>
                        <td>
                           <?= date_format($date, 'd,m,y') ?>
                        </td> <!--formatear la fecha dando dia me año-->
                        <td><a href="../../controlers/verusuario.php?id=<?=$usuarios['id']?>" class="btn btn-outline-info btn-sm">ver</a></td>
                        <td><a href="../../controlers/verusuario.php?id=<?= $usuarios['id'] ?>" class="btn btn-outline-warning btn-sm">editar</a></td>
                        <td><a href="../../controlers/eliminarusuario.php?id=<?= $usuarios['id'] ?>" class="btn btn-outline-danger btn-sm">eliminar</a></td>
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
      </div>
      </div>

   
   <footer>

   </footer>



</body>


</html>