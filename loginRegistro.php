<?php 
    $idMauxi = $_GET['id'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Registrese</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="assetsExte/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assetsExte/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assetsExte/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assetsExte/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="assetsExte/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html"></a>
        </div>
        <form id="register-form" action="librerias/registrarUsuario.php" method="post">
            <input type="hidden" name="idMuaxi" value="<?php echo $idMauxi ?>">
            <h2 class="login-title">Registrar su Usuario</h2>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="txxUsuario" placeholder="Usuario">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="number" name="txtClave" placeholder="Contraseña">
                    </div>
                </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Crear Usuario</button>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="assetsExte/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="assetsExte/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="assetsExte/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assetsExte/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    
</body>

</html>


