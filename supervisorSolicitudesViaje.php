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
                            <img src="assets/request.svg" alt="Icono solicitudes" class="page-icon">
                        </div>
                        <div class="col-5 centerVertical">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="fontBig text-center headText mt-2">
                    Solicitudes de Viaje
                </div>

                <div id="table-viajes">
                    <table class="table table-hover table-white" id="table">
                        <thead>
                            <tr>
                                <th scope="col" class="col-icons"></th>
                                <th scope="col" class="col-names">Nombre</th>
                                <th scope="col" class="col-names">Apellidos</th>
                                <th scope="col" class="col-icons">Tramitar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center">
                                    <a href="supervisorAutorizacionViaje.php">
                                        <span class="glyphicon glyphicon-eye-open black-icon"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center">
                                    <a href="supervisorAutorizacionViaje.php">
                                        <span class="glyphicon glyphicon-eye-open black-icon"></span>
                                    </a>
                                </td>
                            </tr><tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center">
                                    <a href="supervisorAutorizacionViaje.php">
                                        <span class="glyphicon glyphicon-eye-open black-icon"></span>
                                    </a>
                                </td>
                            </tr><tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center">
                                    <a href="supervisorAutorizacionViaje.php">
                                        <span class="glyphicon glyphicon-eye-open black-icon"></span>
                                    </a>
                                </td>
                            </tr><tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center">
                                    <a href="supervisorAutorizacionViaje.php">
                                        <span class="glyphicon glyphicon-eye-open black-icon"></span>
                                    </a>
                                </td>
                            </tr><tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center">
                                    <a href="supervisorAutorizacionViaje.php">
                                        <span class="glyphicon glyphicon-eye-open black-icon"></span>
                                    </a>
                                </td>
                            </tr><tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center">
                                    <a href="supervisorAutorizacionViaje.php">
                                        <span class="glyphicon glyphicon-eye-open black-icon"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <!-- Web page main Scripts -->
    <?php
        include "templates/scripts.php";
    ?>

    <!-- Script changing html title -->
    <script>
        $('title').html("Solicitudes de Viaje");
    </script>

    <!-- Script changing active sidenav li -->
    <script>
        $("#sidebar ul li:first-child").addClass('active');
    </script>
</body>
</html>