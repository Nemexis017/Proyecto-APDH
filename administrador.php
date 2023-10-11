<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('componentes/head.php') ?><!-- Global site tag (gtag.js) - Google Analytics -->
    <?php include('componentes/assetsExte.php') ?><!-- Global site tag (gtag.js) - Google Analytics -->
    
</head>
<body>
    <header class="header_area">
        <?php include('componentes/nav.php') ?>
    </header>
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>ADM</h2>
                            <div class="page_link">
                                <a href="index.php">Inicio</a>
                                <a href="administrador.php">Administrador</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_area section_gap">
        <div class="container">
            <div class="row h_blog_item">
                <div class="col-lg-6">
                    <div class="h_blog_img">
                        <img class="img-fluid" src="img/fotosColegio/admin.png" alt="imagen_administrador" width="550px"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="h_blog_text">
                        <div class="h_blog_text_inner left right ">
                            <h4>Bienvenido al panel de administrador </h4>
                            <p class="text-justify">
                            Esta sección está destinada exclusivamente para directivos responsables de gestionar y 
                            procesar información. Si eres uno de ellos, por favor, haz clic en el botón 
                            de inicio de sesión. Si no eres un directivo, te solicitamos amablemente que regreses al inicio.
                            </p>
                            
                            <a class="primary-btn" href="login.php">
                                Iniciar Sessión 
                                <i class="ti-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area section_gap">
        <?php include('componentes/footer.php')?>
    </footer>
</body>
</html>