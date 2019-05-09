<!DOCTYPE html>
<html>
<head>
    <?php
        include "templates/head.php";
    ?>
</head>
<body>
<div class="wrapper">
    <header>
        <?php
            include "templates/adminSidebar.php";
        ?>
    </header>
    <main id="content">
        <?php
            include "templates/navbar.php";
        ?>

        <section class="text-center mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5 centerVertical">
                        <div class="line"></div>
                    </div>
                    <div class="col-2">
                        <img src="assets/manageUser.svg" alt="Icono usuario" class="page-icon">
                    </div>
                    <div class="col-5 centerVertical">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="position-relative">
                <a class="back-container centerBoth" href="adminUserlist.php">
                    <img src="assets/back.svg" alt="Flecha atrás" class="back-icon">
                    <span class="ml-3">Volver atrás</span>
                </a>

                <div class="fontBig text-center headText my-3">
                    Editar Usuario
                </div>
            </div>

            <section class="col-8 centerHorizontal">
                <form>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-5">
                            <div class="fontBig info-header">Nombre:</div>
                            <input id="name" name="name" type="text" class="form-control" value="Nombre anterior" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="form-group col-12 col-md-5">
                            <div class="fontBig info-header">DNI:</div>
                            <input id="dni" name="dni" type="text" class="form-control" value="DNI anterior" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-5">
                            <div class="fontBig info-header">Nueva contraseña:</div>
                            <input id="password1" name="password2" type="password" class="form-control" placeholder="Introduce la contraseña" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="form-group col-12 col-md-5">
                            <div class="fontBig info-header">Repite contraseña:</div>
                            <input id="password2" name="password2" type="password" class="form-control" placeholder="Repite la contraseña" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-5">
                            <div class="fontBig info-header">Empresa:</div>
                            <input  id="firm" name="firm" type="text" class="form-control" value="Empresa anterior" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="form-group col-12 col-md-5">
                            <div class="fontBig info-header">Departamento:</div>
                            <input id="department" name="department" type="text" class="form-control" value="Departamento anterior" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <div class="fontBig info-header">Cuenta Bancaria:</div>
                            <input id="account" name="account" type="text" class="form-control" value="Cuenta bancaria anterior" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group text-center col-12">
                            <button type="submit" class="btn btn-save fontBig mr-3">Actualizar</button>
                            <button class="btn btn-delete fontBig">Eliminar</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <?php
            include "templates/footer.php";
        ?>
    </main>
</div>

<!-- Web page main Scripts -->
<?php
include "templates/scripts.php";
?>

<!-- Script changing html title -->
<script>
    $('title').html("Solicitar viaje");
</script>

<!-- Script changing active sidenav li -->
<script>
    $("#sidebar ul li:first-child").addClass('active');
</script>
</body>
</html>