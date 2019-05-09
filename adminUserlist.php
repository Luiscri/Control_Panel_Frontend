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
                            <img src="assets/users.svg" alt="Icono usuarios" class="page-icon">
                        </div>
                        <div class="col-5 centerVertical">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="fontBig text-center headText my-3">
                    Lista de usuarios
                </div>

                <section>
                    <div id="table-viajes">
                        <table class="table table-hover table-white text-center" id="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-icons"></th>
                                    <th scope="col" class="col-bill-regular">Nombre</th>
                                    <th scope="col" class="col-bill-regular">Correo</th>
                                    <th scope="col" class="col-bill-regular">Contraseña</th>
                                    <th scope="col" class="col-bill-regular">Puesto</th>
                                    <th scope="col" class="col-bill-price">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user black-icon"></span>
                                    </td>
                                    <td>Luis Lopez</td>
                                    <td>luiscri.falso@gmail.com</td>
                                    <td>*********</td>
                                    <td>Empleado</td>
                                    <td>
                                        <a href="adminEditUser.php">
                                            <span class="glyphicon glyphicon-cog black-icon"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user black-icon"></span>
                                    </td>
                                    <td>Luis Lopez</td>
                                    <td>luiscri.falso@gmail.com</td>
                                    <td>*********</td>
                                    <td>Supervisor</td>
                                    <td>
                                        <a href="adminEditUser.php">
                                            <span class="glyphicon glyphicon-cog black-icon"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user black-icon"></span>
                                    </td>
                                    <td>Luis Lopez</td>
                                    <td>luiscri.falso@gmail.com</td>
                                    <td>*********</td>
                                    <td>Empleado</td>
                                    <td>
                                        <a href="adminEditUser.php">
                                            <span class="glyphicon glyphicon-cog black-icon"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user black-icon"></span>
                                    </td>
                                    <td>Luis Lopez</td>
                                    <td>luiscri.falso@gmail.com</td>
                                    <td>*********</td>
                                    <td>Supervisor</td>
                                    <td>
                                        <a href="adminEditUser.php">
                                            <span class="glyphicon glyphicon-cog black-icon"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user black-icon"></span>
                                    </td>
                                    <td>Luis Lopez</td>
                                    <td>luiscri.falso@gmail.com</td>
                                    <td>*********</td>
                                    <td>Empleado</td>
                                    <td>
                                        <a href="adminEditUser.php">
                                            <span class="glyphicon glyphicon-cog black-icon"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user black-icon"></span>
                                    </td>
                                    <td>Luis Lopez</td>
                                    <td>luiscri.falso@gmail.com</td>
                                    <td>*********</td>
                                    <td>Supervisor</td>
                                    <td>
                                        <a href="adminEditUser.php">
                                            <span class="glyphicon glyphicon-cog black-icon"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <form id="userForm" class="centerBoth">
                                        <td class="align-middle">
                                            <span class="glyphicon glyphicon-plus black-icon"></span>
                                        </td>
                                        <td class="align-middle">
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Nombre del empleado" required>
                                        </td>
                                        <td class="align-middle">
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Correo del empleado" required>
                                        </td>
                                        <td class="align-middle">
                                            <input id="password" name="password" type="password" class="form-control" required placeholder="Contraseña del empleado">
                                        </td>
                                        <td class="align-middle">
                                            <select name="position">
                                                <option value="employee">Empleado</option>
                                                <option value="supervisor">Supervisor</option>
                                            </select>
                                        </td>
                                        <td class="align-middle">
                                            <input type="submit" class="btn btn-save" value="Añadir">
                                        </td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
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
        $('title').html("Lista de usuarios");
    </script>

    <!-- Script changing active sidenav li -->
    <script>
        $("#sidebar ul li:first-child").addClass('active');
    </script>
</body>
</html>