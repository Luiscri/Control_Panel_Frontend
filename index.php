<!DOCTYPE html>
<html>
<head>
    <?php
        include "templates/head.php";
    ?>
</head>
<body>
    <main class="bg centerBoth">
        <form id="formulario" class="bg-light">
            <div class="form-group">
                <label class="fontBig" for="exampleInputEmail1">Dirección de correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce el correo...">
            </div>
            <div class="form-group">
                <label class="fontBig" for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Introduce la contraseña...">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label ml-3 mb-3" for="exampleCheck1">Recuérdame</label>
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