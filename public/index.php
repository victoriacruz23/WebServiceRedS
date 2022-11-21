<?php
session_start();
if (!isset($_SESSION['correo'])) {
  echo ' <script> alert("vuelve a inicar sesion");';
  header("location: ../login.html");
  die();
}
?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!--------fin del link----------------->

  <!---------link icono mensaje (linea 39)-------------------------->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="../public/assets/css/estiloperfil.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="./assets/js/init-alpine.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="./assets/js/charts-lines.js" defer></script>
  <script src="./assets/js/charts-pie.js" defer></script>
  <link rel="stylesheet" href="../css/index.css">

  <link rel="icon" href="../images/cookbook.png">

<body>


  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

    <?php
    require_once('menu_lateral.php');
    ?>
    <!-- Mobile sidebar -->

    <!-- Backdrop -->

    <div class="flex flex-col flex-1 w-full text-decoration-none">
      <?php
      require_once('menu.php');
      ?>
      <center>
        <main class="h-full overflow-y-auto">
          <div class="container">
            <div class="row" style="justify-content: center;">
              <div class="col-8 col-sm-12 col-md-8">
                <!-- insertar publicaciones -->
                <form action="../BD/inserpublicacion.php" enctype="multipart/form-data" method="post">
                  <center>
                    <h1>𝐂𝐑𝐄𝐀𝐑 𝐏𝐔𝐁𝐋𝐈𝐂𝐀𝐂𝐈𝐎𝐍</h1>
                  </center>
                  <input type="text" name="titulo" id="titulo" placeholder="Titulo de receta">
                  <textarea name="contenido" placeholder="Contenido"></textarea>
                  <!-- <input type="text"  id="" > -->
                  <textarea name="ingredientes" placeholder="Ingredientes"></textarea>
                  <input type="file" name="foto" id="">
                  <center>

                    <input type="submit" value="Enviar">
                
                </form>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row" style="justify-content:center ;">
              <div class="col-12 col-sm-12 col-md-12">
                <!-- dato -->
                <div class="row row-cols-1 row-cols-md-2 g-2">
                <?php
                // solicitud de publicaciones
                require_once("../BD/conexion.php");
                $consulta = $conex->query("SELECT * FROM publicaciones");
                while ($row = $consulta->fetch_assoc()) {
                ?>
                <div class="col">
                  <div class="card">
                    <img height="300px" src="../docs/publicaciones/<?php echo $row['nombre_foto'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"style="justify"><?php echo $row['titulo'] ?></h5>
                      <h5 class="card-title"style="justify"><?php echo $row['contenido_publicacion'] ?></h5>
                      <h5 class="card-title" style="justify"><?php echo $row['ingredientes'] ?></h5>
                      <p class="card-text"><a class="btn btn-primary" href="ver.php?id=<?php echo $row['id_publicacion'] ?>">Ver publicacion</a></p>
                     
                    </div>
                  </div>
                </div>
              </div>
              <!-- aquo -->
                </div>
              </div>
            </div>
          </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
  </div>
  </div>
  </div>
  </main>
   </div>
  </div>

</body>

</html>