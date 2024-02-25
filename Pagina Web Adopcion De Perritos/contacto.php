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
                <a href="https://www.adoptamemexico.com/adopcion-perros" class="btn-1" target="_blank">Visita también</a>
            </div>

            <div class="header-img">
                <a href="./index.php"><img src="imagenes/noCompres1.jpg" alt=""></a>
            </div>
        </div>
    </header>

    <main class="contacto">
        <h2>Contacto</h2>
        <br><br>
        <div class="contacto-content container">
            <div class="contacto-txt">
                <br><br><br>
                <p>
                    Si tienes alguna duda, comentario o sugerencia, puedes contactarnos y nos comunicaremos contigo lo antes posible.
                </p>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.052440667768!2d-99.15450212561923!3d19.366881881898436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffb6b06526f3%3A0xb26b3429699cea31!2sCentro%20de%20Adopci%C3%B3n%20Pet%20Mex!5e0!3m2!1ses!2smx!4v1701972374936!5m2!1ses!2smx" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                </div>

            <div class="contacto-txt">
                <form method="post" autocomplete="off" onsubmit="limpiar()">
                    <div class="input-group">
                        <div class="input-container">
                            <input type="text" name="nombre" placeholder="Nombre completo" required/>
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div class="input-container">
                            <input type="tel" name="telefono" placeholder="Teléfono celular" pattern="[0-9]{10}" title="Ingrese un numero celular de 10 digitos" required/>
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div class="input-container">
                            <input type="email" name="email" placeholder="Correo electrónico" required/>
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <label>Género: </label><br>
                            <input type="radio" name="genero" id="masculino" value="Masculino" required>
                            <label for="masculino">Masculino</label>&nbsp;&nbsp;
                            <input type="radio" name="genero" id="femenino" value="Femenino">
                            <label for="femenino">Femenino</label>&nbsp;&nbsp;
                            <input type="radio" name="genero" id="otro" value="Otro">
                            <label for="otro">Otro</label>
                            <br><br>
                        </div>

                        <div class="input-container">
                            <label for="tamanio">Tamaño de raza que prefieres:</label>
                            <select name="tamanio" id="tamanio" required>
                                <option value="">Selecciona un tamaño de raza</option>
                                <option value="Grande">Grande</option>
                                <option value="Pequeña">Pequeña</option>
                            </select> 
                            <br><br>
                        </div>

                        <div class="input-container">
                            <textarea name="comentario" placeholder="Comentario" required></textarea>
                        </div>

                        <input type="checkbox" id="check" onChange="habilitar()"/>&nbsp;&nbsp;Quiero enviar mi comentario.

                        <input type="submit" id="enviar" name="enviar" class="btn" value="Enviar Comentario" disabled="true"/>
                    </div>
                </form>
            </div>
        </div>

        <div class="servicios-content container">
            <p><a href="contacto.php#header" class="btn-1">Volver arriba</a></p>
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

    <?php
        include("core/send_comentario.php");
    ?>

    <script>
        function limpiar(){
            alert("Su comantario ha sido enviado, ¡¡¡Muchas Gracias!!!");
            window.location.href="./";
        }
        function habilitar(){
            var check = document.getElementById('check');
            var boton = document.getElementById('enviar');
            
            if(check.checked)
                boton.disabled = false;
            else
                boton.disabled = true;
        }
    </script>
</body>
</html>