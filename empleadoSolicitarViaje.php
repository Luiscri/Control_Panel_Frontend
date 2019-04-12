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
                            <img src="assets/plane.svg" alt="Icono viajes" class="page-icon">
                        </div>
                        <div class="col-5 centerVertical">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="fontBig text-center headText my-4">
                    Solicitar Viaje
                </div>

                <section class="col-8 centerHorizontal">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <div class="fontBig info-header">Origen del viaje:</div>
                                <input id="origin" name="origin" type="text" class="form-control" placeholder="Ciudad origen" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <div class="fontBig info-header">Destino del viaje:</div>
                                <input id="destination" name="destination" type="text" class="form-control" placeholder="Ciudad destino" required>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <div class="col-12 col-md-6">
                                <div class="fontBig info-header">Fecha de Inicio:</div>
                                <div class="input-group">
                                    <input id="dateFrom" name="dateFrom" type="date" class="form-control" placeholder="DD/MM/YYYY" required>
                                    <span class="input-group-addon form-right-icon">
                                        <i class="glyphicon glyphicon-calendar black-icon my-1 mx-2"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <div class="fontBig info-header">Fecha de Fin:</div>
                                <div class="input-group">
                                    <input id="dateTo" name="dateTo" type="date" class="form-control" placeholder="DD/MM/YYYY" required>
                                    <span class="input-group-addon form-right-icon">
                                        <i class="glyphicon glyphicon-calendar black-icon my-1 mx-2"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <div class="fontBig mb-2 info-header">Descripción del viaje:</div>
                                <textarea id="description" name="description" type="text" class="form-control" placeholder="Describe brevemente el objetivo del viaje" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <div class="fontBig info-header">Precio Aproximado:</div>
                                <div class="input-group">
                                    <input id="price" name="price" type="number" class="form-control" placeholder="Coste del viaje en euros" required>
                                    <span class="input-group-addon form-right-icon">
                                        <i class="glyphicon glyphicon-euro black-icon my-1 ml-1 mr-2"></i>
                                    </span>
                                </div>

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
        $('title').html("Solicitar viaje");
    </script>

    <!-- Script changing active sidenav li -->
    <script>
        $("#sidebar ul li:nth-child(2)").addClass('active');
    </script>
</body>
</html>