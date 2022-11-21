<?php
session_start();
if (!isset($_SESSION['correo'])) {
  echo ' <script> alert("vuelve a inicar sesion");';
  header("location: ../login.html");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<link rel="stylesheet" href="../public/assets/css/estilosss.css">
	<link rel="shortcut icon" href="../img/logo.png">
	<title>Perfil</title>

<link rel="icon" href="../images/cookbook.png">
	
</head>
<body>
	
	<div class="contenedor">
		<div class="card-image">
            <img src="../images/david.jpg" class="card-img">
                    </div>
		<header>
			<div class="logo">
				<h1>Angel David Santos</h1> 
				<p>Cocinero de MasterChef</p>
			</div>
			<form action="">
				<input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
			</form>
			<div class="categorias" id="categorias">
				<a href="#" class="activo">Publicaciones</a>
				<a href="#">Amigos</a>
				<a href="#">Comidas</a>
				<a href="#">Personas</a>
				
			</div>
	</header>
  		</div>
		  <div class="container">
			<div class="row" style="justify-content:center ;">
				<div class="col-6 col-sm-12 col-md-6 mt-5">
					<?php
					// solicitud de publicaciones
					require_once("../BD/conexion.php");
					$consulta = $conex->query("SELECT * FROM publicaciones");
					while ($row = $consulta->fetch_assoc()) {
					?>
						<!-- publicar -->
						<div class="card mb-5" style="max-width: 400px;">
                <div class="row g-0">
                  <div class="card" style="width: 20rem;">

				  <img src="../docs/publicaciones/<?php echo $row['nombre_foto'] ?>" class="img-fluid rounded-start" alt="..."></div>
			<div class="card" style="width: 20rem;">
			<br>
                  <center> <h5 class="card-title"><?php echo $row['titulo'] ?></h5>
                       <br> 
					  <h5 class="card"> Procedimiento</h5>
					 
                      
                    <p class="card-text"><?php echo $row['contenido_publicacion'] ?></p>
                      <h2 class=""> Ingredientes</h2>
                      
                      <br>
                      <p class="card-text"><?php echo $row['ingredientes'] ?></p>
                    
                    <br> <a href="likes.php" class="btn btn-warning">Me Gusta</a></center>    

					   </div>
					   </div>
						</div>
					<?php
					}
					?>
				</div>
	
<?php


?>  

	<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
	<script src="../public/assets/js/main.js"></script>
</body>
</html>