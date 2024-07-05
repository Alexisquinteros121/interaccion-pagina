<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles/login.css">

    <link rel="icon" type="image" href="/img/logo.jpg">
</head>

<body>

    <header>
        <a href="index.html"><img class="logo" src="img/Designer.jpeg" alt="Logo"></a>
    </header>
    <main>
        <section>


            <h2 class="login">INICIA SESION</h2>
            <form action="iniciosesion.php" autocomplete="off" accept-charset="UTF-8" method="POST">
                <div class="mb-3 mt-3">
                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" placeholder="ingrese su nombre de usuario"
                        name="usuario" maxlength="20">
                </div>
                <div class="mb-3">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="ingrese su contraseña"
                        name="contrasena" maxlength="20">
                </div>

                <div class="form-check mb-3">
                    <label class="form-check-label"></label><input class="form-check-input" type="checkbox"
                        name="remember">Recuerdame
                </div>

                <button class="botonEnviar" type="submit" value="Ingresar" method="POST">Ingresar</button>

            </form>


            <br>
            <a href="/ciudadano/recuperarContrasena.html">Olvidé mi contraseña</a>
            <br>
            <p>¿No estás regitrado? <a href="/ciudadano/registro.php">Crea una cuenta</a>
        </section>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h4>THE MAN</h4>
                <p>Locales</p>
                <p>Mayorista</p>
                <p>Políticas de privacidad</p>
                <p>Términos y condiciones</p>
            </div>
            <div class="footer-column">
                <h4>ATENCIÓN AL CLIENTE:</h4>
                <a href="#">Contactate</a>
                <a href="#">Formas de pago</a>
                <a href="#">Información de envíos</a>
                <a href="#">Cambios y devoluciones</a>
                <a href="#">Preguntas frecuentes</a>
                <a href="#">Guía de talles</a>

            </div>
            <div class="footer-column">
                <h4>ESTAMOS PARA AYUDARTE.</h4>
                <p>📞 +543834904022</p>
                <p>Escribinos tu consulta. Lunes a Viernes 9 a 13hs.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>