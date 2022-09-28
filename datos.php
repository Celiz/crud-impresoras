<?php
header('Content-Type: application/json');
require("db.php");
$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "SELECT * FROM impresoras");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        $respuesta = mysqli_query($conexion, "insert into impresoras (codigo,modelo, color, tipo, precio) values ('$_POST[codigo]', '$_POST[modelo]', '$_POST[color]', '$_POST[tipo]', '$_POST[precio]')");
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "delete from impresoras where codigo=$_GET[codigo]");
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $datos = mysqli_query($conexion, "SELECT * FROM impresoras where codigo=$_GET[codigo]");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'modificar':
        $respuesta = mysqli_query($conexion, "UPDATE impresoras set modelo='$_POST[modelo]', color='$_POST[color]', tipo='$_POST[tipo]', precio='$_POST[precio]' where codigo=$_GET[codigo]");
        echo json_encode($respuesta);
        break;
}
   
?>
