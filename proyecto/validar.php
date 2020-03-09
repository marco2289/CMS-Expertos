<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start ();
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$apellido;

 //conexion a la BD
 $conexion = mysqli_connect ("localhost", "local", "local", "YT_COLORES");
 $query = "SELECT COUNT(*) as CONTADOR FROM empleados WHERE nombre = '$nombre' and clave = '$clave'";
 $resultado = mysqli_query($conexion, $query);
 $filas = mysqli_fetch_array($resultado);

 if ($filas['CONTADOR']>0) {
   $_SESSION['nombre'] = $nombre;
   $_SESSION['apellido'] = $apellido;
   header("location:ventas.php");
 }else {
   echo 'DATOS INCORRECTOS';
 }

 mysqli_free_result($resultado);
 mysqli_close($conexion);




 ?>
