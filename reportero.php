<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registro de reporteross</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagen/x-icon" href="img/icon.jpeg">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
    require_once("slider.php");
       ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            require_once("menu.php");
         ?>
            <!-- Navbar End -->

            <!-- FORMULARIO NOTICIA -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4" style="justify-content: justific;">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="grid text-justific" style="--bs-columns: 10; --bs-gap: 1rem;">
                                <h6 class="g-col-6 mb-4 text-center" style="font-size: 25px;">Registrar reportero</h6>
                                <form action="sql/regnoticia.php" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Nombre Completo:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="Fecha" name="Fecha" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Telefono:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="CodiPost" name="CodiPost"
                                                required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="categoria" class="col-sm-2 col-form-label">Sexo:</label>
                                        <div class="col-sm-10">
                                            <select class="form-select form-select-sm mb-3" id="categoria"
                                                name="categoria" aria-label=".form-select-sm example"
                                                style="font-size: 15px;" required>
                                                <option selected>--Seleccione una opcion--</option>
                                                <option value="1">Hombre</option>
                                                <option value="2">Mujer</option>
                                                <option value="3">Prefiero no decirlo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Estado: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="Estado" name="Estado" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Ciudad:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="Ciudad" name="Ciudad" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Correo Electronico:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="Ciudad" name="Ciudad" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Contraseña:</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="contraseña" name="Ciudad"
                                                required>
                                        </div>
                                    </div>

                                    <center>
                                        <button type="submit" class="btn btn-primary" id="enviar">Subir</button>

                                    </center>
                                </form>
                            </div>
                        </div>
                        <!-------------------FIN DEL FORMULADRIO-------------------------->
                    </div>
                </div>
                <!-- Form End -->
                <script>

                </script>
            </div>
            <!-- Content End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>