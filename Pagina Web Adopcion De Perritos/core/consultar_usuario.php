<?php

$nombreUsuario = isset($_POST["nombreUsuario"]) ? $_POST["nombreUsuario"] : "";
$datos = null;


if($nombreUsuario != ""){
    $consulta= "SELECT * FROM cliente WHERE nombre = '$nombreUsuario'";
    $datos = mysql_query($consulta);

    if(mysql_affected_rows() == 0)
        echo'<script type="text/javascript">
            alert("Usuario NO encontrado en la base");
        </script>';
    else
        echo'<script type="text/javascript">
            alert("Usuario existente");
        </script>';
}

?>