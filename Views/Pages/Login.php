<!doctype html>
<html lang="en">
    <head>
        <title>Login | SAO</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../Css/Styles.css">
    </head>

    <body>
        <header class="Encabezado">
            <a href="../../Index.php"><img src="../Img/Header/Logo.png" alt="Logo" title="Home" class="Logo"></a>
            <nav class="Menu">
                <a href="#Nosotros">Us</a>
                <a href="../Pages/Galeria.php">Galery</a>
                <a href="../Pages/Productos.php">Products</a>

            </nav>

        </header>

        <main class="Cuerpo">
            <section class="ContenedorLogin Glass">
                <form action="" method="post" class="Login">
                    <h1>Login</h1>
                    <div>
                        <label for="">Usuario:</label>
                        <input type="text" name="Usuario" placeholder="Ingrese Usuario:">

                        <label for="">Contraseña:</label>
                        <input type="text" name="Contraseña" placeholder="Ingrese Contraseña:">

                        <input type="submit" value="Ingresar" name="Ingresar" class="btn btn-primary"/>

                        <a href="">¿Olvido su Contraseña?</a>

                    </div>

                </form>

            </section>

        </main>

        <footer class="Pie">
            <div>
                <a href="https://www.facebook.com/SwordArtOnlineUSA/?locale=es_LA"><img src="../Img/Footer/facebook.png" alt="facebook"></a>
                <a href="https://x.com/SwordArtUSA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="../Img/Footer/gorjeo.png" alt="twitter"></a>
                <a href="https://www.instagram.com/swordart.official/?hl=es"><img src="../Img/Footer/instagram.png" alt="instagram"></a>
                <a href="https://www.google.com/maps?sca_esv=19f035aacac729ca&rlz=1C1UEAD_enAR1087AR1087&output=search&q=dimps+inc&source=lnms&fbs=AEQNm0CbCVgAZ5mWEJDg6aoPVcBgWizR0-0aFOH11Sb5tlNhdzvguW7TJ8ZJj4v-NOGupFhxd-DOgUR1l9xXyzOc-YucGA6bECdQ77RKJHiq1jHP5f6-nqNW1bGrQ1a6CJ-1ZGcCE1LsuVElulj0OLNVPvI3m2Hg86YyK99popVzP-_IdahPuShDSv2TAqKS7WQ44m9efbek73J4U8LoVMvg7PMtVQPG3w&entry=mc&ved=1t:200715&ictx=111"><img src="../Img/Footer/mapa.png" alt="mapa"></a>
                <a href="https://www.gruposwats.com/sword-art-online.html"><img src="../Img/Footer/whatsapp.png" alt="whatsapp" title="Pagina donde te puedes unir a grupos"></a>
                <a href=""><img src="../Img/Footer/youtube.png" alt="youtube"></a>

            </div>

             <ul id="Nosotros">
                <li>Politicas y Privacidad</li>
                <li>Derechos de uso</li>
                <li>Derechos reservados por CopyRaigth</li>

             </ul>

        </footer>

        <div class="Glass">
            <?php
                include("../../Controller/ConexionBD.php");
                include("../../Model/Login.php");

            ?>

        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    </body>    
</html>
