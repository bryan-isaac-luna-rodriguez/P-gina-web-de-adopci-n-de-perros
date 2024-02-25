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
                <img src="imagenes/hamburguesa.svg" class="menu-icono" alt="">
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

    <div class="contacto">
        <h2>Adopta</h2>
        <br><br>
        <div class="contacto-content container">
            <div class="contacto-txt">
                <?php
                    if (isset($_GET['id'])){
                        if ( $_GET['id'] != "")
                            include("core/consultar_perrito.php");

                        while ($fila = mysql_fetch_array($datos, MYSQL_ASSOC)) { 
                ?>
                            <div>
                                <?php $ruta = "imagenes/catalogo/".$fila ['foto']; ?>
                                <p><img src='<?= $ruta ?>' class='catalogo-img' alt='' width='100%' id="perrito"></p>
                                <p>Nombre: <?= $fila["nombre"] . ", " . $fila['genero'] ?> </p>
                                <p>Edad: <?= $fila["edad"] ?> años</p>
                                <p>Peso: <?= $fila["peso"] ?> kg</p>
                                <p>Raza: <?= $fila["raza"] ?></p>
                                <p>En <strong><?= $fila["procesos"] ?></strong> proceso(s) de adopción</p>
                            </div>
                            <button onclick="aumenta()" class="btn-1">+</button>
                            <button onclick="disminuye()" class="btn-1">-</button>
                <?php
                        }
                    }
                    else{
                ?>
                    <form method="post" autocomplete="off">
                        <div class="input-group">
                            <h3>Paso 1</h3>
                            <div class="input-container">
                                <input type="text" name="nombrePerrito" placeholder="Nombre del perrito"/>
                            </div>

                            <input type="submit" name="enviar" class="btn" value="Buscar"/>
                        </div>
                    </form>

                    <?php
                        include("core/consultar_perrito.php");

                        if(isset($datos) && mysql_affected_rows() > 0){
                            while ($fila = mysql_fetch_array($datos, MYSQL_ASSOC)) { 
                    ?>
                                <div>
                                    <?php $ruta = "imagenes/catalogo/".$fila ['foto']; ?>
                                    <p><img src='<?= $ruta ?>' class='catalogo-img' alt=''></p>
                                    <p>Nombre: <?= $fila["nombre"] . ", " . $fila['genero'] ?> </p>
                                    <p>Edad: <?= $fila["edad"] ?> años</p>
                                    <p>Peso: <?= $fila["peso"] ?> kg</p>
                                    <p>Raza: <?= $fila["raza"] ?></p>
                                    <p>En <strong><?= $fila["procesos"] ?></strong> proceso(s) de adopción</p>
                                </div>
                    <?php
                            }
                        }
                        else{
                            if($nombrePerrito != ""){
                    ?>
                        <br><div style='background-color:  #ffd9d9; width: 90%; color: white;'><p>No encontramos al perrito que buscas =(</p></div>
                    <?php
                            }
                        }
                    ?>
                    <?php
                    }
                ?>
            </div>

            <div class="contacto-txt">
                <form method="post" autocomplete="off">
                    <div class="input-group">
                        <h3>Paso 3</h3>
                        <div class="input-container">
                            <input type="text" name="nombreUsuario" placeholder="Nombre del usuario"/>
                        </div>

                        <input type="submit" name="enviar" class="btn" value="Buscar"/>
                    </div>
                </form>

                <?php
                    include("core/consultar_usuario.php");

                    if(isset($datos) && mysql_affected_rows() > 0){
                        while ($fila = mysql_fetch_array($datos, MYSQL_ASSOC)) { 
                ?>
                            <form method="post" autocomplete="off" action="core/send_solicitud.php" onsubmit="registrarSolicitud()">
                                <div class="input-group">
                                    <h3>Paso 4</h3>
                                    <h3>Datos personales</h3>
                                    <input type="hidden" name="idH" value="<?= $fila["id"] ?>"/>
                                    <input type="hidden" name="idHP" id="idHP"/>
                                    <div class="input-container">
                                        <input type="text" name="nombre" placeholder="Nombre completo" value="<?= $fila["nombre"] ?>"/>
                                        <i class="fa-solid fa-user"></i>
                                    </div>

                                    <div class="input-container">
                                        <input type="tel" name="telefono" placeholder="Teléfono celular" value="<?= $fila["telefono"] ?>"/>
                                        <i class="fa-solid fa-phone"></i>
                                    </div>

                                    <div class="input-container">
                                        <input type="email" name="email" placeholder="Correo electrónico" value="<?= $fila["email"] ?>"/>
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>

                                    <h3>Dirección</h3>

                                    <div class="input-container">
                                        <input type="text" name="calle" placeholder="Calle" value="<?= $fila["calle"] ?>"/>
                                    </div>

                                    <div class="input-container">
                                        <input type="text" name="numero" placeholder="Número" value="<?= $fila["numero"] ?>"/>
                                    </div>

                                    <div class="input-container">
                                        <input type="text" name="adicional" placeholder="Adicional" value="<?= $fila["adicional"] ?>"/>
                                    </div>

                                    <div class="input-container">
                                        <input type="text" name="cp" placeholder="Código Postal" value="<?= $fila["cp"] ?>"/>
                                    </div>

                                    <div class="input-container">
                                        <input type="text" name="alcaldiamunicipio" placeholder="Alcaldía / Municipio" value="<?= $fila["alcaldiamunicipio"] ?>"/>
                                    </div>

                                    <div class="input-container">
                                        <input type="text" name="estado" placeholder="Estado" value="<?= $fila["estado"] ?>"/>
                                    </div>

                                    <input type="submit" name="generarSolicitud" class="btn" onClick="colocarIdP(<?= $_GET['id'] ?>)" value="Generar Solicitud"/>
                                </div>
                            </form>
                <?php
                        }
                    }
                    else{
                ?>
                    <form method="post" autocomplete="off" action="core/send_solicitud.php" onsubmit="registrarUsuario()">
                        <div class="input-group">
                            <h3>Paso 2</h3>
                            <h3>Datos personales</h3>
                            <input type="hidden" name="idH" id="idH"/>
                            <div class="input-container">
                                <input type="text" name="nombre" placeholder="Nombre completo"required/>
                                <i class="fa-solid fa-user"></i>
                            </div>

                            <div class="input-container">
                                <input type="tel" name="telefono" placeholder="Teléfono celular" pattern="[0-9]{10}" title="Ingrese un numero celular de 10 digitos" required/>
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div class="input-container">
                                <input type="email" name="email" placeholder="Correo electrónico"required/>
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <h3>Dirección</h3>

                            <div class="input-container">
                                <input type="text" name="calle" placeholder="Calle" required/>
                            </div>

                            <div class="input-container">
                                 <input type="tex" name="numero" pattern="[0-9]" placeholder="Número" title="Ingrese un número" required/>
                            </div>

                            <div class="input-container">
                                <input type="text" name="adicional" placeholder="Adicional"/>
                            </div>

                            <div class="input-container">
                                <input type="text" name="cp" placeholder="Código Postal" pattern="[0-9]{5}" placeholder="Número" title="Ingrese un cp de 5 digitos" required/>
                            </div>

                            <div class="input-container">
                            <select name="alcaldiamunicipio" required>
                                <option value="">Selecciona una alcaldia</option>
                                <option value="1">Álvaro Obregón</option>
                                <option value="2">Azcapotzalco</option>
                                <option value="3">Benito Juárez</option>
                                <option value="4">Cuajimalpa de Morelos</option>
                                <option value="5">Coyoacán</option>
                                <option value="6">Cuauhtémoc</option>
                                <option value="7">Gustavo A. Madero</option>
                                <option value="8">Iztacalco</option>
                                <option value="9">Iztapalapa</option>
                                <option value="10">La Magdalena Contreras</option>
                                <option value="11">Miguel Hidalgo</option>
                                <option value="12">Milpa Alta</option>
                                <option value="13">Tláhuac</option>
                                <option value="14">Tlalpan</option>
                                <option value="15">Venustiano Carranza</option>
                                <option value="16">Xochimilco</option>
                            	</select>
                            </div>

                            <div class="input-container">
                            <select name="estado" required>
                                <option value="">Seleccione un estado</option>
                                <option value="1">Aguascalientes</option>
                                <option value="2">Baja California</option>
                                <option value="3">Baja California Sur</option>
                                <option value="4">Campeche</option>
                                <option value="5">Chiapas</option>
                                <option value="6">Chihuahua</option>
                                <option value="7">Ciudad de México</option>
                                <option value="8">Coahuila de Zaragoza</option>
                                <option value="9">Colima</option>
                                <option value="10">Durango</option>
                                <option value="11">Guanajuato</option>
                                <option value="12">Guerrero</option>
                                <option value="13">Hidalgo</option>
                                <option value="14">Jalisco</option>
                                <option value="15">Estado de México</option>
                                <option value="16">Michoacán de Ocampo</option>
                                <option value="17">Morelos</option>
                                <option value="18">Nayarit</option>
                                <option value="19">Nuevo León</option>
                                <option value="20">Oaxaca</option>
                                <option value="21">Puebla</option>
                                <option value="22">Querétaro</option>
                                <option value="23">Quintana Roo</option>
                                <option value="24">San Luis Potosí</option>
                                <option value="25">Sinaloa</option>
                                <option value="26">Sonora</option>
                                <option value="27">Tabasco</option>
                                <option value="28">Tamaulipas</option>
                                <option value="29">Tlaxcala</option>
                                <option value="30">Veracruz</option>
                                <option value="31">Yucatán</option>
                                <option value="32">Zacatecas</option>
                            	</select>
                            </div>
                           

                            <input type="submit" name="registrarUsuarioN" class="btn" onClick="colocarId(<?= isset($_GET['id']) ? $_GET['id'] : "" ?>)" value="Registrar Usuario"/>
                        </div>
                    </form>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="servicios-content container">
            <p><a href="adoptar.php#header" class="btn-1">Volver arriba</a></p>
        </div>
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
    <script>
        function colocarId(id){
            document.getElementById("idH").value = id;
        }
        function colocarIdP(id){
            document.getElementById("idHP").value = id;
        }
        function aumenta(){
            var image = document.getElementById('perrito');
            image.height = image.height + 10;
        }
        function disminuye(){
            var image = document.getElementById('perrito');
            image.height = image.height - 10;
        }
        function registrarUsuario(){
            alert("Se ha registrado el nuevo usuario, favor de realizar la búsqueda por nombre")
        }
        function registrarSolicitud(){
            alert("Se ha registrado una nueva solicitud, ¡Gracias por apoyar a nuestros perritos!")
        }
    </script>
</body>
</html>