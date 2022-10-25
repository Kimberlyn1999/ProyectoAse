<?php 
    include("conexionbd.php");

    $consulta="SELECT *  FROM alumno";
    $resultado=mysqli_query($conectar,$consulta);

    $row=mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

    <body background="imagen/17327-colegio.jpg" width="100" height="100" >
        <a href="home.php"><img class="home" src="imagen/home.png" width="30" height="30"></a>
        <center><h1>REGISTRO ALUMNOS</h1></center>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h3>INGRESE DATOS</h3>
                                <form action="insercion.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="idalumno" placeholder="No Alumno">
                                    <input type="text" class="form-control mb-3" name="al_nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="al_direccion" placeholder="Direccion">   
                                    <input type="text" class="form-control mb-3" name="al_correo" placeholder="correo"> 
                                    <input type="text" class="form-control mb-3" name="al_telefono" placeholder="Telefono"> 
                                    <input type="text" class="form-control mb-3" name="al_genero" placeholder="Genero">
                                    <input type="text" class="form-control mb-3" name="al_estado" placeholder="Estado">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Genero</th>
                                        <th>Estado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($resultado)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idalumno']?></th>
                                                <th><?php  echo $row['al_nombre']?></th>
                                                <th><?php  echo $row['al_direccion']?></th>
                                                <th><?php  echo $row['al_correo']?></th> 
                                                <th><?php  echo $row['al_telefono']?></th> 
                                                <th><?php  echo $row['al_genero']?></th> 
                                                <th><?php  echo $row['al_estado']?></th> 
                                                

                                        
                                                <th><a href="actualizacion.php?id=<?php echo $row['idalumno'] ?>" class="btn btn-info">Modificar</a></th>
                                                <th><a href="eliminacion.php?id=<?php echo $row['idalumno'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>