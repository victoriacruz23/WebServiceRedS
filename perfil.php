<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Perfil-Bahia Noticias</title>
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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <img src="img/logo.png.png" alt=""  style="height: 45px; border-radius: 30px;">
                    <h3 class="text-primary" >Bahia Noticias</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Mauricio Arce</h6>
                        <span>Reportero</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="bi bi-house"></i>Inicio</a>
                    <a href="Noticia.php" class="nav-item nav-link"><i class="bi bi-newspaper"></i>Crear Noticia</a>
                    <a href="Sesion.php" class="nav-item nav-link"><i class="bi bi-box-arrow-left"></i>Cerrar Sesion</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <!---  ICONO DE MENU -->
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                 <!--- END MENU -->
                
                 
                <div class="navbar-nav align-items-center ms-auto">
                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Mauricio Arce</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="perfil.php" class="dropdown-item">Mi perfil</a>
                            <!--<a href="#" class="dropdown-item">Configuracion</a>-->
                            <a href="Sesion.php" class="dropdown-item">Cerrar Sesion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <!-- Sale & Revenue Start -->
            <!-- Sale & Revenue End -->

            <!-- Sales Chart Start -->
            <!-----------PERFIL------------>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0" style="font-size: 25px;">Perfil</h6>
                            </div>
                        </div>

                        <!------------------------------------------------>
                        <i class="bi bi-person-circle" style="color: black; font-size: 15px; margin-left:px; position: fixed;"></i>
                        <h6 style="margin-left: 20px; margin-top: 2px;">Edital perfil</h6>

                        <div class="mb-3">
                            <h6 style="margin-top: 20px; font-size: 18px;">Avatar</h6>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                            <h6>Nombre</h6>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="user" required value="Mauricio Arce" autocomplete="on">
                                <div class="control">
                                    <p class="help" style="font-size: 12px;" >
                                        Obligatorio. Te llamas
                                    </p>
                                </div>
                            </div>

                            <h6>Correo electronico</h6>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" required value="mauricio200@gmail.com" autocomplete="on">
                                <div class="control">
                                    <p class="help" style="font-size: 12px;">
                                        Obligatorio. Su correo electronico
                                    </p>
                                </div>
                            </div>
                            <div class="m-n2">
                                <button type="submit" class="btn btn-primary">Subir</button>
                            </div>
                             <!------------------------------------------------>
                        <!-----------SEGUNDA PERFIL------------>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0" style="font-size: 20px;">Mi perfil</h6>
                            </div>
                        </div>
                        <img src="img/icon2.jpg" height="100px" style="margin-top:22px; border-radius: 50px;">
                        
                        <h6 style="margin-top: 20px;">Nombre</h6>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user" readonly value="Mauricio Arce">
                        </div>

                        <h6 style="margin-top: 20px;">Correo electronico</h6>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user" readonly value="Mauricio Arce">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->
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