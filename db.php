<?php
$user = "root";
$password = "";
$hostname = "localhost";
$database = "impresoras-abdala";

$mysql=new mysqli($hostname,$user,$password,$database);
if ($mysql->connect_error)
  die("Problemas con la conexion a la base de datos");
?>