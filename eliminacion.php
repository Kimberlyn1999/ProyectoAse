<?php

include("conexionbd.php");

$id=$_GET['id'];

$consulta="DELETE FROM alumno  WHERE idalumno='$id'";
$resultado=mysqli_query($conectar,$consulta);

    if($resultado){
        Header("Location: alumnos.php");
    }
?>