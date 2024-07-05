<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa de Hombre</title>
    <link rel="stylesheet" href="styles/tienda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>


</head>

<body>

    <div class="contedor-favoritos" type="submit">
        <a href="login.php"><img class="imagen" src="img/usuario.png" width="40"></a>

        <img class="imagen" src="img/corazon.png" alt="" width="35">
        <img class="imagen" src="img/carrito.png" alt="carrito" width="35">
    </div>

    <section id="content-buscar">
        <form action="/cliente/busquedaFallida.html" autocomplete="off">
            <div class="search-container">
                <input class="label" type="search" name="buscar" id="buscar" maxlength="30" required
                    placeholder=" ¿Qué desea buscar?">
                <i class="fa fa-search search-icon"></i>
            </div>
        </form>
    </section>

    <header>
        <a href="#"><img class="logo" src="img/Designer.jpeg" alt="Logo"></a>



    </header>
    <nav>
        <nav class="barra">

        </nav>

        <a href="#" class=""
            style="font-weight: bold; text-decoration: none; color: rgb(255, 255, 255);">🔥OFERTAS🔥</a>
        <a href="#" class="" style="font-weight: bold; text-decoration: none; color: rgb(255, 255, 255);">NUEVOS
            INGRESOS</a>
        <a href="#" class="" style="font-weight: bold; text-decoration: none; color: rgb(255, 255, 255);">COLECCION</a>
        <a href="#" class="" style="font-weight: bold; text-decoration: none; color: rgb(255, 255, 255);">ACCESORIOS</a>
        <a href="#" class=""
            style="font-weight: bold; text-decoration: none; color: rgb(255, 255, 255);">PROMOCIONES</a>

    </nav>
    </div>

    




    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider1.webp" class="d-block w-100" alt="One slide" height="400" width="800">
            </div>
            <div class="carousel-item">
                <img src="img/slider2.webp" class="d-block w-100" alt="Second slide" height="400" width="800">
            </div>
            <div class="carousel-item">
                <img src="img/slider3.webp" class="d-block w-100" alt="Third slide" height="400" width="800">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    
    <nav class="nav2">

        <h5 class="cuotas" href="#">3, 6 y 9 CUOTAS SIN INTERÉS EN SUETERS Y ZAPATOS</h5>


    </nav>

    
    




    <div class="carousel-container">
        <button class="carousel-button prev" onclick="moveCarousel(-1)">&#10094;</button>
        <div class="contenedorTarjetas">

            <div class="col">
                <div class="card">
                    <img src="img/campera1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Campera</h6>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/campera2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Campera</h5>
                        <p class="card-text">Campera de ...</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-button next" onclick="moveCarousel(1)">&#10095;</button>
    </div>

    <div class="sidebar">
        <h2>CATEGORIAS</h2>
        <ul>
            <li><a href="#">Camisas</a></li>
            <li><a href="#">Remeras</a></li>
            <li><a href="#">Polos</a></li>
            <li><a href="#">Pantalones</a></li>
            <li><a href="#">Abrigos</a></li>
            <li><a href="#">Accesorios</a></li>
            <li><a href="#">PACK REMERAS</a></li>
            <li><a href="#">Calzados</a></li>
        </ul>

        <div class="filter-title">Filtrar por</div>
        <div class="filter-group">
            <div>Talle</div>
            <div><input type="checkbox" id="xs"><label for="xs"> XS (8)</label></div>
            <div><input type="checkbox" id="s"><label for="s"> S (80)</label></div>
            <div><input type="checkbox" id="m"><label for="m"> M (99)</label></div>
        </div>
    </div>





    <h3 class="estilo">ENCONTRÁ LO QUE BUSCAS</h3>

    <div id="metafora">
        <img id="imagen" src="./img/elegancia.jpg" alt="">


        <div id="container-categorias">
            <h4 id="subtitulos">RELOJES</h4>
            <div id="container-tarjetas">
                <div class="card" style="width: 15rem;">
                    <img src="./img/reloj1.webp" class="categorias-img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Skmei 1335</p>
                        <button id="btn">VER</button>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">

                    <img src="./img/reloj2.webp" class="categorias-img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Skmei 1142</p>
                        <button id="btn">VER</button>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="./img/reloj3.webp" class="categorias-img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Seger 9232</p>
                        <button id="btn">VER</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="container-categorias">
            <h4 id="subtitulos">LENTES DE SOL</h4>
            <div id="container-tarjetas">
                <div class="card" style="width: 15rem;">
                    <img src="./img/lentes1.webp" class="categorias-img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ray-Ban Aviator</p>
                        <button id="btn">VER</button>
                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="./img/lentes1.webp" class="categorias-img" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ray-Ban summer</p>
                        <button id="btn">VER</button>
                    </div>
                </div>

            </div>
        </div>
    </div>



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

    <!-- Incluye Font Awesome para los iconos de redes sociales -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>