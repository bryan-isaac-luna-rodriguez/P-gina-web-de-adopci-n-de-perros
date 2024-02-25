<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopta =)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./imagenes/favicon.png"/>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="./" class="logo"><i class="fa-solid fa-home"></i> Huellitas de Amor</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="./catalogo.php">Busca tu compañero</a></li>
                    <li><a href="./proceso.php">Conoce Nuestro Proceso</a></li>
                    <li><a href="./adoptar.php">Adoptar</a></li>
                    <li><a href="./contacto.php">Contacto</a></li>
                </ul>
            </navbar>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Huellitas de Amor</h1>
                <p>
                    La mejor opción para elegir un compañero de vida.
                </p>
                <a href="./proceso.php" class="btn-1">Información</a>
            </div>

            <div class="header-img">
                <a href="./index.php"><img src="imagenes/noCompres1.jpg" alt=""></a>
            </div>
        </div>
    </header>

    <div class="contacto container">
        <?php
            if (isset($_GET['folio'])){
                if ( $_GET['folio'] != "")
                    echo "<p style='background-color:  #a1f9b2;'>Su solicitud ha sido registrada con el folio: <strong>" . $_GET['folio'] . "</strong>.</p>";
                else
                    echo "<p style='background-color:  #fe4f4f;'>Hubo un problema con su solicitud, favor de registrala nuevamente.</p>";
            }
        ?>

        <form method="post" autocomplete="off" class="form-completo">
            <input type="submit" name="reporte" class="btn" value="Generar Reporte"/>
        </form>

        <?php
            include("core/send_reporte.php");
            
            if(isset($datos) && mysql_affected_rows() > 0){
        ?>
            <main class="contacto">
                <h2>Reporte</h2>
                <br><br>
                <div class="form-completo">
                    <table>
                        <tr>
                            <th>Folio de adopción</th>
                            <th>Perrito</th>
                            <th>Cliente</th>
                        </tr>
        <?php
                    while ($fila = mysql_fetch_array($datos, MYSQL_ASSOC)) { 
        ?>
                        <tr>
                            <td><?= $fila["folio"]?></td>
                            <td><?= $fila["perrito"]?></td>
                            <td><?= $fila["cliente"]?></td>
                        </tr>
        <?php 
                    }
        ?>
                    </table>
                </div>
            </main>
        <?php 
            }
        ?>
    </div>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="./" class="logo">Huellitas de Amor</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="./catalogo.php">Busca tu compañero</a></li>
                    <li><a href="./proceso.php">Conoce Nuestro Proceso</a></li>
                    <li><a href="./adoptar.php">Adoptar</a></li>
                    <li><a href="./contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <footer class="second-footer" style="background-color: #02B1F4; padding: 10px; color: black;">
    <div class="container">
        <h3>Propietarios: Carolina Rodríguez,  Bryan Luna,  Karen Reyes</h3>
        <p>Última actualización: 08/Diciembre/2023 10:50</p>
    </div>
    </footer>
</body>
</html>