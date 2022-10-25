<?php
include('bdcon.php');
$usuario=$_POST['login_name'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;


$conectar= mysqli_connect('localhost','academia','Secreto.*','gacademica');


$consulta="SELECT*FROM usuario where login_name='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conectar,$consulta);

$filas=mysqli_num_rows($resultado);

 if($filas){
 	header("location:home.php");

 }else{
 	?>
 	<?php
 	include("login.html")
 	?>
 	<h1 class="bad">ERROR EN LA AUTENTICACION</h1>
 	<?php 
 }
 mysqli_free_result($resultado);
 mysqli_close($conectar);