<?php 
    include("conexionbd.php");

$id=$_GET['id'];

$consulta="SELECT * FROM alumno WHERE idalumno='$id'";
$resultado=mysqli_query($conectar,$consulta);

$row=mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background="imagen/17327-colegio.jpg" width="100" height="100" >
                <div class="container mt-5">

                    <form action="update.php" method="POST">
                                <input type="hidden" name="idalumno" value="<?php echo $row['idalumno']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="al_nombre" placeholder="Nombre Completo" value="<?php echo $row['al_nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="al_direccion" placeholder="Direccion" value="<?php echo $row['al_direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="al_correo" placeholder="correo" value="<?php echo $row['al_correo']  ?>">
                                <input type="text" class="form-control mb-3" name="al_telefono" placeholder="telefono" value="<?php echo $row['al_telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="al_genero" placeholder="Genero" value="<?php echo $row['al_genero']  ?>">
                                <input type="text" class="form-control mb-3" name="al_estado" placeholder="Estado" value="<?php echo $row['al_estado']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>