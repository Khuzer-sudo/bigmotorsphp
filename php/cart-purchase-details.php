<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/big-motors-css.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1d89d0db5f.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!----HEADER---->
        <div style="background: #1E1B1B;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 my-2">
                        <div class="d-flex justify-content-center">
                            <img class="img-logo-bm" src="../img/logo-big-motors.png">
                        </div>
                    </div>
                    <!----BOTONES HEADER---->
                    <div class="d-flex flex-column justify-content-center align-items-center col-8">
                        <div class="d-flex justify-content-evenly box-opciones mb-4">
                            <div class="box-opcion">
                                <a class="btn-red" href="../index.php">INICIO</a>
                            </div>
                            <div class="box-opcion">
                                <a class="btn-red" href="category.php">CATEGORÍAS</a>
                            </div>
                            <div class="box-opcion">
                                <a class="btn-red" href="#">CATÁLOGO</a>
                            </div>
                        </div>
                        <!----/BOTONES HEADER---->
                        <!----FORM---->
                        <div>
                            <form class="d-flex" action="search-bm" method="POST">
                                <input class="input-search" type="search" name="search" placeholder="buscar...">
                                <button class="icon-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <!----/FORM---->
                    </div>
                    <div class="d-flex flex-column justify-content-evenly align-items-center col-2">
                        <!----BTN-MODAL---->
                        <button type="button" class="btn-red2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <span> 
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                                INGRESAR
                            </span>
                        </button>
                        <!----/BTN-MODAL---->
                        <!-- MODAL-INICIAR-SESION-->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="title-white" id="exampleModalLabel1">INGRESAR</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="mt-5" method="POST" action="">
                                            <div class="centrado">
                                                <div>
                                                    <input class="registro-modal" type="email" name="" placeholder="✉ CORREO">
                                                </div>
                                                <div class="my-3">
                                                    <input class="registro-modal" type="password" name="" placeholder="🔑CONTRASEÑA">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="subt-white-modal">
                                            <div class="d-flex justify-content-center">
                                                <button class="btn-red2 my-4" type="button">INICIA SESIÓN</button>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <a class="" href="php/forget-password.php">
                                                    ¿OLVIDASTE TU CONTRASEÑA?
                                                </a>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <!----AQUI-APARECE-CON-INGRESO-FACEBOOK---->
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <!----AQUI-APARECE-CON-INGRESO-FACEBOOK---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="centrado">
                                                <span class="subt-white-footer">
                                                    NO TIENES CUENTA
                                                </span>
                                                <a type="button" class="subt-red2" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                    REGÍSTRATE
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----/MODAL-INICIAR-SESION---->
                        <!----MODAL-REGISTRASE---->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="title-white" id="exampleModalLabel2">REGISTRO</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="mt-5" method="POST" action="">
                                            <div class="centrado">
                                                <div class="img-cat">
                                                    <input class="registro-modal" type="text" name="" placeholder="NOMBRE">
                                                </div>
                                                <div class="my-3">
                                                    <input class="registro-modal" type="text" name="" placeholder="APELLIDO">
                                                </div>
                                                <div>
                                                    <input class="registro-modal" type="tel" name="" placeholder="CELULAR">
                                                </div>
                                                <div class="my-3">
                                                    <input class="registro-modal" type="email" name="" placeholder="CORREO">
                                                </div>
                                                <div>
                                                    <input class="registro-modal" type="password" name="" placeholder="CONTRASEÑA">
                                                </div>
                                                <div class="my-3">
                                                    <input class="registro-modal" type="password" name="" placeholder="CONFIRMA TU CONTRASEÑA">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="subt-white-modal">
                                            <div class="d-flex flex-column align-items-center">
                                                <span>
                                                    TU CONTRASEÑA DEBE CONTENER
                                                </span>
                                                <ul>
                                                    <li>
                                                        8 DIGITOS
                                                    </li>
                                                    <li>
                                                        AL MENOS UNA LETRA MAYUSCULA
                                                    </li>
                                                    <li>
                                                        AL MENOS UNA LETRA MINUSCULA
                                                    </li>
                                                    <li>
                                                        UN NUMERO
                                                    </li>
                                                    <li>
                                                        UNO O MAS DE LOS SIGUIENTES CARÁCTERES
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn-red2 px-5">REGISTARSE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----/MODAL-REGISTRASE---->
                        <!----BTN-CARRITO---->
                        <div class="d-flex">
                            <button class="icon-car">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </button>
                            <div class="number-counter">
                                <span>
                                    0
                                </span>
                            </div>
                        </div>
                        <!----/BTN-CARRITO---->
                    </div>
                </div>
            </div>
        </div>
        <!----/HEADER---->
        <!----BODY---->
            <div class="container">
                <div class="row box-tu-carrito mt-3">
                    <div class="col-12">
                        <div class="centrado mb-3">
                            <div>
                                <span class="title-black">
                                    Tu carrito 🛒
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="centrado">
                            <span>
                                PRODUCTO
                            </span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="centrado">
                            <span>
                                PRECIO
                            </span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="centrado">
                            <span>
                                CANTIDAD
                            </span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <span>
                                SUBTOTAL
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-4">
                <div class="row box-carrito">
                    <div class="col-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                </svg>
                            </a>
                            <img class="img-redes-footer mx-4" src="../img/img-casco2.png">
                            <div>
                                <span class="subt-white-footer2">
                                    CASCO GHIRA GH-KIDS CUTE ABATIBLE SVS
                                <span>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <div>
                            <span class="subt-white-footer2">
                                $ 2,072.96 MXN
                            </span>
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <div class="d-flex">
                            <button class="btn-cantidad2" type="button">
                                <span class="subt-white-modal">
                                    -
                                </span>
                            </button>
                            <div class="box-n-cant">
                                <span class="subt-white-modal">
                                    1
                                </span>
                            </div>
                            <button class="btn-cantidad2" type="button">
                                <span class="subt-white-modal">
                                    +
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <div class="subt-white-footer2">
                            <span>
                                $ 2,072.96 MXN
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="box-resumen-compra">
                            <div class="d-flex justify-content-evenly">
                                <div>
                                    <div>
                                        <span>
                                            SUBTOTAL
                                        </span>
                                    </div>
                                    <div class="my-3">
                                        <span>
                                            ENVÍO
                                        </span>
                                    </div>
                                    <div>
                                        <span>
                                            IVA
                                        </span>
                                    </div>
                                    <div class="my-3">
                                        <span>
                                            TOTAL
                                        </span>
                                    </div>
                                </div>
                                <div class="box-caracteristicas"></div>
                                <div>
                                    <div>
                                        <span>
                                            $ 2,072.96 MXN
                                        </span>
                                    </div>
                                    <div class="my-3">
                                        <span>
                                            LOS REYES
                                        </span>
                                    </div>
                                    <div>
                                        <span>
                                            $ 4.19 MXN
                                        </span>
                                    </div>
                                    <div class="my-3">
                                        <span>
                                            $ 2,077.05 MXN
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div>
                                    <a class="btn-verde" href="">
                                        FINALIZAR COMPRA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="centrado">
                            <div>
                                <img class="img-75" src="../img/img-formas-pago.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="centrado">
                            <div>
                                <img class="img-75" src="../img/img-envio-mx.png">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="my-4">
                            <div>
                                <img class="img-10" src="../img/img-cupon.png">
                            </div>
                            <form class="my-3">
                                <input class="input-cupon" type="text" name="" placeholder="ESCRIBE EL CÓDIGO DE TU CUPÓN">
                                <div class="mt-3">
                                    <a class="btn-verde" href="">
                                        APLICAR CUPÓN
                                    </a>
                                </div>
                            </form>
                            <div>
                                <a class="cont-black-Neue2" href="../index.php">
                                    🡰 SEGUIR DE SHOPPING
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!----/BODY---->
        <!----FOOTER---->
        <div class="" style="background: #1E1E1E ;">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 my-4">
                        <div class="centrado">
                            <img class="img-logo-bm my-3" src="../img/logo-big-motors.png">
                            <div>
                                <span class="cont-white-footer">Somos</span> <span class="cont-red-footer">Distribuidores de Accesorios y Refacciones</span> <span class="cont-white-footer">para motocicleta de todo tipo, ofrecemos venta por mayoreo, se uno de nuestros distribuidores.</span>
                            </div>
                        </div>
                    </div>
                    <div class="centrado col-6 col-lg-3 my-4">
                        <span class="subt-white-footer">CONTÁCTANOS</span>
                        <h3 style="color: red;">TELÉFONO</h3>
                        <h4 style="color: white;">+52 55 1122 3344</h4><br>
                        <h3 style="color: red;">CORREO</h3>
                        <h4 style="color: white;">CONTACTO@GMAIL.COM</h4><br>
                        <h3 style="color: red;">CORPORATIVO</h3>
                        <h4 style="color: white;">BIG-MOTORS, RUPIAS 71, AQUILES SERDÁN, VENUSTIANO CARRANZA, 15430 CIUDAD DE MÉXICO, CDMX</h4>
                    </div>
                    <div class="col-6 col-lg-3 my-4">
                        <div class="centrado">
                            <div class="mb-4">
                                <span class="subt-white-footer">Ubicación</span>
                            </div>
                            <div>
                                <img class="img-ubi" src="../img/img-ubicacion.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 ">
                        <p class="subt-white-footer my-4">
                            Redes Sociales
                        </p>
                        <div class="d-center">
                            <img class="img-redes-footer mt-4" src="../img/img-fb.png">
                        </div>
                        <div class="d-center">
                            <img class="img-redes-footer my-4" src="../img/img-insta.png">
                        </div>
                        <div class="d-center">
                            <img class="img-redes-footer mb-4" src="../img/img-twitter.png">
                        </div>
                        <div class="d-center">
                            <img class="img-redes-footer" src="../img/img-tiktok.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----/FOOTER---->
    </body>
    <script src="../js/bootstrap.min.js"></script>
</html>