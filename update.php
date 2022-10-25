<?php

include("conexionbd.php");

$idalumno=$_POST['idalumno'];
$al_nombre=$_POST['al_nombre'];
$al_direccion=$_POST['al_direccion'];
$al_correo=$_POST['al_correo'];
$al_telefono=$_POST['al_telefono'];
$al_genero=$_POST['al_genero'];
$al_estado=$_POST['al_estado'];



$consulta="UPDATE alumno SET al_nombre='$al_nombre',al_direccion='$al_direccion',al_correo='$al_correo',al_telefono='$al_telefono',al_genero='$al_genero', al_estado='$al_estado' WHERE idalumno='$idalumno'";
$resultado=mysqli_query($conectar,$consulta);

    if($resultado){
        Header("Location: alumnos.php");
    }
?>