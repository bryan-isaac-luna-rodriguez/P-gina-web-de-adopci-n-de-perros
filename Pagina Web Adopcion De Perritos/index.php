<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopta =)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./imagenes/favicon.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/jquery.rwdImageMaps.min.js"></script>
</head>
<body>
    <header id="header" class="header">
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
            <div class="header-txt" style="align-items: center">
                <img width="55%" src="imagenes/integrantes.png" alt="">
            </div>
            <div class="header-img">
                <a href="./index.php"><img src="imagenes/noCompres1.jpg" alt=""></a>
            </div>
        </div>
    </header>

    <section class="about container">
        <div class="about-img about-txt">
            <h3 style="text-align: center;">Haz clic sobre el perrito que más te gusta.</h3> 
            <img src="imagenes/mapa_perritos.png" alt="" usemap="#map" onmouseover="hover();">
        </div>

        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Somos una comunidad comprometida con la adopción responsable, nos apasiona la conexión entre humanos y perros, buscamos unir a perros con familias cariñosas creando la combinación perfecta para una vida plena y feliz.

            </p>
        </div>

        <map name="map">
            <area shape="rect" coords="20, 165, 120, 295" href="./adoptar.php?id=3">
            <area shape="rect" coords="95, 320, 160, 436" href="./adoptar.php?id=5">
            <area shape="rect" coords="145, 150, 270, 300" href="./adoptar.php?id=4">
            <area shape="rect" coords="300, 70, 405, 170" href="./adoptar.php?id=8">
            <area shape="rect" coords="335, 200, 430, 290" href="./adoptar.php?id=7">
            <area shape="rect" coords="290, 300, 480, 410" href="./adoptar.php?id=1">
            <area shape="rect" coords="440, 145, 560, 275" href="./adoptar.php?id=2">
            <area shape="rect" coords="550, 290, 645, 400" href="./adoptar.php?id=6">
        </map>
    </section>

    <main class="servicios">
        <h2>Ven y conócenos...</h2>

        <div class="servicios-content container">
            <div class="servicio-1">
		<i class="fas fa-paw"></i>
		<h3>¡Woof! Eso significa 'te necesito' en perrito. ¿Me entiendes?</h3>
                <audio style="width: 100%;" controls>
                    <source src="audio/jauria.mp3" type="audio/mp3">
                    Tu navegador no soporta los elementos de <code>audio</code>.
                </audio>
            </div>
    
            <div class="servicio-1">
                <i class="fas fa-paw"></i>
                <h3>Soy pequeño, peludo y estoy listo para ser el rey de tu corazón.</h3>
                <video width="100%" height="auto" controls>
                    <source src="video/en_el_jardin.mp4" type="video/mp4">
                    Tu navegador no soporta los elementos de <code>video</code>.
                </video> 
            </div>
        </div>

        <div class="servicios-content container">
            <p><a href="index.php#header" class="btn-1">Volver arriba</a></p>
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
        function hover(){
            $('img[usemap]').rwdImageMaps();
        }
    </script>
</body>
</html>