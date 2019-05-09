<!DOCTYPE html>
<html class="loginPage">
<head>
    <?php
        include "templates/head.php";
    ?>
</head>
<body class="loginPage">
    <main class="bg centerBoth">
        <form id="formulario" class="bg-light">
            <div class="form-group">
                <label class="control-label fontBig" for="email">Dirección de correo</label>
                <div class="inner-addon left-addon">
                    <i class="glyphicon glyphicon-user"></i>
                    <input id="email" name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Introduce el correo..." required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label fontBig" for="password">Contraseña</label>
                <div class="inner-addon left-addon">
                    <i class="glyphicon glyphicon-lock"></i>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Introduce la contraseña..." required>
                </div>
            </div>
            <div class="form-check">
                <input id="checkbox" name="checkbox" type="checkbox" class="form-check-input">
                <label class="form-check-label ml-3 mb-3" for="checkbox">Recuérdame</label>
            </div>
            <div class="centerBoth">
                <button type="submit" class="btn fontBig">Entrar</button>
            </div>
        </form>

    </main>
    <!-- Web page main Scripts -->
    <?php
        include "templates/scripts.php";
    ?>

    <!-- Script changing html title -->
    <script>
        $('title').html("Gestión de Viajes - G11");
    </script>
</body>
</html>