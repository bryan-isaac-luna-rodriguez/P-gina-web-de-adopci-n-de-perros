<?php

include("conexion.php");

if(isset($_POST['reporte'])){

    $consulta= "
        SELECT p.folio, c.nombre 'perrito', cl.nombre 'cliente'
        FROM proceso p
            INNER JOIN catalogo c ON p.id_catalogo = c.id
            INNER JOIN cliente cl ON p.id_cliente = cl.id;
    ";

    $datos = mysql_query($consulta);

    if(mysql_affected_rows() == 0)
        echo'<script type="text/javascript">
            alert("Aún NO existen procesos de adopción");
        </script>';
}

?>