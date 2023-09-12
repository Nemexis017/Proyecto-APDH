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
    <section>
        <!-- <div class="row"> -->
            <div class="col-4 content">
                <form id="login-form" action="javascript:;" method="post" class="formulario">
                    <h2 class="login-title">Acceso</h2>
                    <div class="form-group">
                        <div class="input-group-icon right">
                            <div class="input-icon"><i class="fa fa-envelope"></i></div>
                            <input class="form-control" type="email" name="email" placeholder="Usuario" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-icon right">
                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                            <input class="form-control" type="password" name="password" placeholder="contraseña">
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <label class="ui-checkbox ui-checkbox-info">
                            <input type="checkbox">
                            <span class="input-span"></span>Remember me</label>
                        <a href="forgot_password.html">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-block" type="submit">Login</button>
                    </div>
                    <div class="social-auth-hr">
                        <span>Or login with</span>
                    </div>
                    <div class="text-center social-auth m-b-20">
                        <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
                    </div>
                    <div class="text-center">Not a member?
                        <a class="color-blue" href="register.html">Create accaunt</a>
                    </div>
                </form>
            </div>
            
        
    </section>
    <footer class="footer-area section_gap">
        <?php include('componentes/footer.php')?>
    </footer>
</body>
</html>