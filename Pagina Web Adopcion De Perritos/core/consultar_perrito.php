<?php

include("conexion.php");

$id = isset($_GET["id"]) ? $_GET["id"] : "";
$nombrePerrito = isset($_POST["nombrePerrito"]) ? $_POST["nombrePerrito"] : "";

if($id != "")
    $consulta= "SELECT * FROM catalogo WHERE id = $id";
else
    $consulta= "SELECT * FROM catalogo WHERE nombre = '$nombrePerrito'";

$datos = mysql_query($consulta);

if($nombrePerrito != "")
    while ($fila = mysql_fetch_array($datos, MYSQL_ASSOC)) { 
        header('Location: adoptar.php?id='.$fila['id']);
        die();
    }

if(mysql_affected_rows() == 0 && $nombrePerrito != "")
    echo'<script type="text/javascript">
        alert("Perrito no encontrado en la base");
    </script>';
?>