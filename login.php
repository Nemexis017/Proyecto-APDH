<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Administrador Institucional</title>

    <!-- icono de la institucion -->
    <link rel="icon" href="img/iconos/logoMauxi02.icon" />

    <!-- GLOBAL MAINLY STYLES-->
    <link href="assetsExte/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assetsExte/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assetsExte/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assetsExte/css/main.css" rel="stylesheet"/>
    <!-- PAGE LEVEL STYLES-->
    <link href="assetsExte/css/pages/auth-light.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="font-img">
    <div class="content">
        <form id="login-form" action="librerias/acceso.php" method="post" class="needs-validation" novalidate>
            <h2 class="login-title">Administrador</h2>
            <div class="form-group d-flex justify-content-center">
                <img src="img/iconos/logoMauxi02.icon" alt="" width="80px">
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa-solid fa-user"></i></div>
                    <input class="form-control" type="txtUsuario" name="txtUsuario" placeholder="Usuario" autocomplete="off" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Ingrese el usuario
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="txtPassword" placeholder="Contraseña" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Ingrese su contraseña
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                </label>
                <a href="forgot_password.html">¿Has olvidado tu contraseña?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">iniciar sesión</button>
            </div>
            <div class="social-auth-hr">
                <span>O inicia sesión con</span>
            </div>
            <div class="text-center">Nuevo personal autorizado 
                <a class="color-blue" href="registrarPersonal.php">crear cuenta</a>
            </div>
            <div class="text-center">
                Vuleve al inicio
                <a class="color-blue" href="index.php">Inicio</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="js/validacion/validacion.js"></script>
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="./assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
</body>

</html>