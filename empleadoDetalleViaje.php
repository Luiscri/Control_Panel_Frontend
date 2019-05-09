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
                include "templates/empleadoSidebar.php";
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
                    <a class="back-container centerBoth" href="empleadoViajes.php">
                        <img src="assets/back.svg" alt="Flecha atrás" class="back-icon">
                        <span class="ml-3">Volver atrás</span>
                    </a>

                    <div class="fontBig text-center headText my-3">
                        Detalle del Viaje
                    </div>
                </div>

                <section class="col-8 centerHorizontal">
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
                </section>

                <section>
                    <div class="row centerBoth">
                        <div id="table-viajes" class="col-md-4">
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

                    <div class="row mt-4 centerBoth">
                        <div class="text-center col-4">
                            <form>
                                <input id="bill" name="bill" type="file" class="form-control required" required>
                                <input type="submit" class="btn fontBig mt-3" value="Agregar factura">
                            </form>
                        </div>
                    </div>
                </section>

                <section class="col-8 centerHorizontal">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <div class="fontBig info-header mt-3">Gastos totales:</div>
                            <span>1.000.000€</span>
                        </div>
                        <div class="col-md-7"></div>
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
        $('title').html("Autorizar viaje");
    </script>

    <!-- Script changing active sidenav li -->
    <script>
        $("#sidebar ul li:first-child").addClass('active');
    </script>
</body>
</html>