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
                            <img src="assets/bill.svg" alt="Icono facturas" class="page-icon">
                        </div>
                        <div class="col-5 centerVertical">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="fontBig text-center headText mt-2">
                    Revisión de Viajes
                </div>

                <div id="table-viajes">
                    <table class="table table-hover table-white text-center" id="table">
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
                                <td class="text-center"><span class="glyphicon glyphicon-eye-open black-icon"></span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center"><span class="glyphicon glyphicon-eye-open black-icon"></span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center"><span class="glyphicon glyphicon-eye-open black-icon"></span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center"><span class="glyphicon glyphicon-eye-open black-icon"></span></td>
                            </tr>
                            <tr>
                                <td class="text-center"><span class="glyphicon glyphicon-envelope black-icon"></span></td>
                                <td>Beatriz</td>
                                <td>Blanco Béjar</td>
                                <td class="text-center"><span class="glyphicon glyphicon-eye-open black-icon"></span></td>
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
        $('title').html("Revisión de Viajes");
    </script>

    <!-- Script changing active sidenav li -->
    <script>
        $("#sidebar ul li:nth-child(2)").addClass('active');
    </script>
</body>
</html>
