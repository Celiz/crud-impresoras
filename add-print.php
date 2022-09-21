<?php
include_once 'db.php';

//data request of form
$modelo = $_REQUEST['modelo'];
$tipo = $_REQUEST['tipo'];
$color = $_REQUEST['color'];
$precio = $_REQUEST['precio'];

//insert data
$sql = "INSERT INTO impresoras (modelo, tipo, color, precio) VALUES ('$modelo', '$tipo', '$color', '$precio')";
$mysql->query($sql);

//close connection
$mysql->close();

//redirect to index.php
header("Location: index.php");


?>