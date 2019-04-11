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
                include "templates/supervisorSidebar.php";
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
                            <img src="assets/profile.svg" alt="Icono perfil" class="page-icon">
                        </div>
                        <div class="col-5 centerVertical">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="fontBig text-center headText my-4">
                    Datos de Usuario
                </div>

                <section class="col-8 centerHorizontal">
                    <form>
                        <div class="form-row mb-3">
                            <div class="form-group col-12 col-md-5">
                                <div class="fontBig info-header">Nombre:</div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre y apellidos" required>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="form-group col-12 col-md-5">
                                <div class="fontBig info-header">DNI:</div>
                                <input type="text" class="form-control" id="dni" name="dni" placeholder="Documento Nacional de Identidad" required>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-12 col-md-5">
                                <div class="fontBig info-header">Empresa:</div>
                                <input type="text" class="form-control" id="firm" name="firm" placeholder="Nombre de la empresa" required>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="form-group col-12 col-md-5">
                                <div class="fontBig info-header">Departamento:</div>
                                <input type="text" class="form-control" id="department" name="department" placeholder="Nombre del departamento" required>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-12 col-md-12">
                                <div class="fontBig info-header">Cuenta Bancaria:</div>
                                <input type="text" class="form-control" id="account" name="account" placeholder="Cuenta bancaria en la que se realizará el reembolso" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group text-center col-12">
                                <button type="submit" class="btn fontBig">Enviar</button>
                            </div>
                        </div>
                    </form>
                </section>

            </div>
        </main>
    </div>

    <!-- Web page main Scripts -->
    <?php
    include "templates/scripts.php";
    ?>

    <!-- Script changing html title -->
    <script>
        $('title').html("Perfil");
    </script>

    <!-- Script changing active sidenav li -->
    <script>
        $("#sidebar ul li:first-child").addClass('active');
    </script>
</body>
</html>