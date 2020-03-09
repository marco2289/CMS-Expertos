<?php

$link = 'mysql:host=localhost;dbname=YT_COLORES';
$usuario = 'local';
$pass = 'local';

try {
$pdo = new PDO ($link, $usuario,$pass );
echo 'conexion establecida';

} catch (PDOException $e) {
  print "¡Error!: " . $e->getMessage() . "<br/>";
  die();
}
?>
