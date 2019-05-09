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
                <div class="position-relative">
                    <a class="back-container centerBoth" href="supervisorRevisionViajes.php">
                        <img src="assets/back.svg" alt="Flecha atrás" class="back-icon">
                        <span class="ml-3">Volver atrás</span>
                    </a>

                    <div class="fontBig text-center headText my-3">
                        Procesar Viaje
                    </div>
                </div>

                <section class="col-8 centerHorizontal">
                    <div class="row mb-2">
                        <div class="col-12 col-md-5">
                            <div class="fontBig info-header">Nombre del empleado:</div>
                            <span>Juan Carlos Dueñas</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-5">
                            <div class="fontBig info-header">Origen del viaje:</div>
                            <span>Madrid</span>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-12 col-md-5">
                            <div class="fontBig info-header">Destino del viaje:</div>
                            <span>Londres</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-5">
                            <div class="fontBig info-header">Fecha de inicio:</div>
                            <span>15/04/2019</span>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-12 col-md-5">
                            <div class="fontBig info-header">Fecha de fin:</div>
                            <span>06/11/2039</span>
                        </div>
                    </div>
                    <div class="fontBig info-header mt-5">Lista de gastos:</div>
                    <div class="row centerBoth">
                        <div id="table-viajes" class="col-md-5">
                            <table class="table table-hover table-white text-center" id="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="col-icons"></th>
                                    <th scope="col" class="col-bill-file">Facturas</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd black-icon"></span>
                                    </td>
                                    <td>
                                        <a href="">Descargar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd black-icon"></span>
                                    </td>
                                    <td>
                                        <a href="">Descargar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd black-icon"></span>
                                    </td>
                                    <td>
                                        <a href="">Descargar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd black-icon"></span>
                                    </td>
                                    <td>
                                        <a href="">Descargar</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-5">
                            <div class="fontBig info-header mt-3">Gastos totales:</div>
                            <span>1.000.000€</span>
                        </div>
                        <div class="col-md-7"></div>
                    </div>

                    <div class="row">
                        <div class="centerBoth col-12" style="flex-direction: row;">
                            <form class="mr-1">
                                <input type="hidden" name="" value="">
                                <button type="submit" class="btn fontBig">Aceptar</button>
                            </form>
                            <form>
                                <input type="hidden" name="" value="">
                                <button type="submit" class="btn fontBig">Rechazar</button>
                            </form>
                        </div>
                    </div>
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
        $('title').html("Procesar viaje");
    </script>

    <!-- Script changing active sidenav li -->
    <script>
        $("#sidebar ul li:nth-child(2)").addClass('active');
    </script>
</body>
</html>