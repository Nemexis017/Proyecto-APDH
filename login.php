<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Acceso (Admi)</title>

    <!-- icono de la institucion -->
    <link rel="icon" href="img/iconos/logoMauxi02.icon" />

    <!-- GLOBAL MAINLY STYLES-->
    <link href="assetsExte/vendors/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assetsExte/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />

    <link href="assetsExte/css/main.css" rel="stylesheet"/>
    <link href="assetsExte/css/pages/auth-light.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style_private.css">
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
                    <input class="form-control" type="text" name="txtUsuario" placeholder="Usuario" required>
                    <div class="invalid-feedback">
                        Ingrese el usuario
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <input class="form-control" type="password" name="txtPassword" placeholder="Contraseña" required>
                    <div class="invalid-feedback">
                        Ingrese la contraseña
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                </label>
                <a href="#">¿Has olvidado tu contraseña?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-log" type="submit">iniciar sesión</button >
            </div>
            <div class="text-center">
                Vuleve al inicio
                <a class="color-blue" href="index">Inicio</a>
            </div>
        </form>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/validacion/validacion.js"></script>
</body>

</html>