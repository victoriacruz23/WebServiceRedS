<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    // solicitud de publicaciones
    $id = $_GET['id'];
    require_once("../sql/webservice.sql");
    $consulta = $conex->query("SELECT * FROM publicaciones WHERE id_publicacion = '$id'");
    while ($row = $consulta->fetch_assoc()) {
    ?>
        <div class="container">
            <div class="row mt-4" style="justify-content:center ;">
                <div class="col-8">
                    <h2 class="text-center">Publicacion</h2>
                    <div class="card mb-3">
                        <img src="../docs/publicaciones/<?php echo $row['nombre_foto'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['titulo'] ?></h5>
                            <h5 class="card-title"><?php echo $row['contenido_publicacion'] ?></h5>
                            <h5 class="card-title"><?php echo $row['ingredientes'] ?></h5>
                            <p class="card-text">Esta noticia es recomentada por Bahía Noticias</p>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</body>

</html>