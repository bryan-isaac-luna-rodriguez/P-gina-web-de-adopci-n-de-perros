<?php

include("conexion.php");

if(isset($_POST['enviar'])){

    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['tamanio']) >= 1 &&
        strlen($_POST['comentario']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $genero = trim($_POST['genero']);
        $tamanio = trim($_POST['tamanio']);
        $comentario = trim($_POST['comentario']);

        $consulta = "
            INSERT INTO comentario(nombre, telefono, email, genero, tamanio_raza, comentario) 
            VALUES ('$nombre', '$telefono', '$email', '$genero', '$tamanio', '$comentario')
        ";

        $resultado = mysql_query($consulta);
    }
}

?>