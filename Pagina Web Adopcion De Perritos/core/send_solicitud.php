<?php

include("conexion.php");

$folio = "";

if(isset($_POST['generarSolicitud'])){
    $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    if(
        strlen($_POST['idH']) >= 1 &&
        strlen($_POST['idHP']) >= 1
    ) {
        $idCliente = intval(trim($_POST['idH']));
        $idCatalogo = intval(trim($_POST['idHP']));
        $nombre = trim($_POST['nombre']);

        $folio = date("ymd").date("His")."-AHA-".substr(str_shuffle($permitted_chars), 0, 4);

        $consulta = "
            INSERT INTO proceso(id_catalogo, id_cliente, folio) 
            VALUES ($idCatalogo, $idCliente, '$folio')
        ";

        $resultado = mysql_query($consulta);

        $consulta = "
            UPDATE catalogo SET procesos = procesos + 1 WHERE id = $idCatalogo
        ";

        $resultado = mysql_query($consulta);

        $asunto = "Solicitud de adopción";
        $correo = "leopined@gmail.com";

        $msg = "
            <html>
                <head>
                    <title>Prueba de correo</title>
                </head>
                <body>
                    <h1>Se ha generado una solicitud de adopción.</h1>
                    <p>Folio: " . $folio . "</p>
                    <p>Para: " . $nombre . "</p>
                </body>
            </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        $headers .= "From: Leo <leopined@gmail.com>\r\n";

        $mail = mail($correo, $asunto, $msg, $headers);
    }
    
    header('Location: ../folio.php?folio='.$folio.'&mail='.$mail);
    die();
}

if(isset($_POST['registrarUsuarioN'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['calle']) >= 1 &&
        strlen($_POST['numero']) >= 1 &&
        strlen($_POST['cp']) >= 1 &&
        strlen($_POST['alcaldiamunicipio']) >= 1 &&
        strlen($_POST['estado']) >= 1 
    ) {
        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $calle = trim($_POST['calle']);
        $numero = trim($_POST['numero']);
        $adicional = trim($_POST['adicional']);
        $cp = trim($_POST['cp']);
        $alcaldiamunicipio = trim($_POST['alcaldiamunicipio']);
        $estado = trim($_POST['estado']);

        if($alcaldiamunicipio==1){
            $alcaldiamunicipio ='Álvaro Obregón';
        }
        elseif($alcaldiamunicipio==2){
            $alcaldiamunicipio ='Azcapotzalco';
        }
        elseif($alcaldiamunicipio==3){
            $alcaldiamunicipio ='Benito Juárez';
        }
        elseif($alcaldiamunicipio==4){
            $alcaldiamunicipio ='Cuajimalpa de Morelos';
        }
        elseif($alcaldiamunicipio==5){
            $alcaldiamunicipio ='Coyoacán';
        }
        elseif($alcaldiamunicipio==6){
            $alcaldiamunicipio ='Cuauhtémoc';
        }
        elseif($alcaldiamunicipio==7){
            $alcaldiamunicipio ='Gustavo A. Madero';
        }
        elseif($alcaldiamunicipio==8){
            $alcaldiamunicipio ='Iztacalco';
        }
        elseif($alcaldiamunicipio==9){
            $alcaldiamunicipio ='Iztapalapa';
        } 
        elseif($alcaldiamunicipio==10){
            $alcaldiamunicipio ='La Magdalena Contreras';
        }
        elseif($alcaldiamunicipio==11){
            $alcaldiamunicipio ='Miguel Hidalgo';
        }
        elseif($alcaldiamunicipio==12){
            $alcaldiamunicipio ='Milpa Alta';
        }
        elseif($alcaldiamunicipio==13){
            $alcaldiamunicipio ='Tláhuac';
        }
        elseif($alcaldiamunicipio==14){
            $alcaldiamunicipio ='Tlalpan';
        }
        elseif($alcaldiamunicipio==15){
            $alcaldiamunicipio ='Venustiano Carranza';
        }
        elseif($alcaldiamunicipio==16){
            $alcaldiamunicipio ='Xochimilco';
        }

        if($estado==1){
            $estado ='Aguascalientes';
        }
        elseif($estado==2){
            $estado ='Baja California';
        }
        elseif($estado==3){
            $estado ='Baja California Sur';
        }
        elseif($estado==4){
            $estado ='Campeche';
        }
        elseif($estado==5){
            $estado ='Chiapas';
        }
        elseif($estado==6){
            $estado ='Chihuahua';
        }
        elseif($estado==7){
            $estado ='Ciudad de México';
        }
        elseif($estado==8){
            $estado ='Coahuila de Zaragoza';
        }
        elseif($estado==9){
            $estado ='Colima';
        }
        elseif($estado==10){
            $estado ='Durango';
        }
        elseif($estado==11){
            $estado ='Guanajuato';
        }
        elseif($estado==12){
            $estado ='Guerrero';
        }
        elseif($estado==13){
            $estado ='Hidalgo';
        }
        elseif($estado==14){
            $estado ='Jalisco';
        }
        elseif($estado==15){
            $estado ='Estado de México';
        }
        elseif($estado==16){
            $estado ='Michoacán de Ocampo';
        }
        elseif($estado==17){
            $estado ='Morelos';
        }
        elseif($estado==18){
            $estado ='Nayarit';
        }
        elseif($estado==19){
            $estado ='Nuevo León';
        }
        elseif($estado==20){
            $estado ='Oaxaca';
        }
        elseif($estado==21){
            $estado ='Puebla';
        }
        elseif($estado==22){
            $estado ='Querétaro';
        }
        elseif($estado==23){
            $estado ='Quintana Roo';
        }
        elseif($estado==24){
            $estado ='San Luis Potosí';
        }
        elseif($estado==25){
            $estado ='Sinaloa';
        }
        elseif($estado==26){
            $estado ='Sonora';
        }
        elseif($estado==27){
            $estado ='Tabasco';
        }
        elseif($estado==28){
            $estado ='Tamaulipas';
        }
        elseif($estado==29){
            $estado ='Tlaxcala';
        }
        elseif($estado==30){
            $estado ='Veracruz';
        }
        elseif($estado==31){
            $estado ='Yucatán';
        }
        elseif($estado==32){
            $estado ='Zacatecas';
        }

        $consulta = "
            INSERT INTO cliente(nombre, telefono, email, calle, numero, adicional, cp, alcaldiamunicipio, estado) 
            VALUES ('$nombre', '$telefono', '$email', '$calle', $numero, '$adicional', $cp, '$alcaldiamunicipio', '$estado')
        ";

        $resultado = mysql_query($consulta);
    }
    header('Location: ../adoptar.php?id='.$_POST["idH"]);
    die();
}
?>