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
    <header class="header"  id="header">
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
                <img src="imagenes/noCompres1.jpg" alt="">
            </div>
        </div>
    </header>

    <?php
        include("core/consultar_catalogo.php");
    ?>

    <main class="servicios">
        <h2>Busca tu compañero</h2>
        
        <div class="tarjetas">
            <?php
                $i = 1;
                while ($fila = mysql_fetch_array($datos, MYSQL_ASSOC)) { 
                    if($i == 1){
                        echo "<div class='tarjetas-content container'>";
                        $i = 1;
                    }
            ?>
                <div class="tarjeta">
                    <?php $ruta = "imagenes/catalogo/".$fila ['foto']; ?>
                    <p><img src='<?= $ruta ?>' class='catalogo-img' alt='' style='width: 180px; height: 150px;'></p>
                    <p>Nombre: <?= $fila["nombre"] . ", " . $fila['genero'] ?> </p>
                    <p>Edad: <?= $fila["edad"] ?> años</p>
                    <p>Peso: <?= $fila["peso"] ?> kg</p>
                    <p>Raza: <?= $fila["raza"] ?></p>
                    <p>En <strong><?= $fila["procesos"] ?></strong> proceso(s) de adopción</p>
                    <p><input type="submit" name="adoptar" class="btn" value="Adoptar" onClick="adoptar(<?= $fila["id"] ?>)"/></p>
                </div>
            <?php 
                    $i++;
                    if($i == 5){
                        echo "</div>";
                        $i = 1;
                    }
                }
            ?>
        </div>
        
        <div class="servicios-content container">
            <p><a href="catalogo.php#header" class="btn-1">Volver arriba</a></p>
        </div>
    </main>

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
    <script>
        function adoptar(id){
            window.location.href="./adoptar.php?id=" + id;
        }
    </script>
</body>
</html>