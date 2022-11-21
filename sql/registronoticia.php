<?php
session_start();
require_once("conexion.php");
if (empty($_POST['titulo']) || empty($_POST['ingredientes']) || empty($_POST['contenido'])) {
    header("Location: ../public/index.php");
    exit;
}
$cp = $_POST["titulo"];
$contenido = $_POST["contenido"];
$ingredientes = $_POST["ingredientes"];
$img = $_FILES["foto"];
$carpetaImg = '../docs/publicaciones/';
$id_sesion = $_SESSION["info"]["id_usuarios"];
// crear nombre de la imagen 
$nombreImg = md5(uniqid(rand(), true)) . ".jpg";
move_uploaded_file($img["tmp_name"], $carpetaImg . $nombreImg);
date_default_timezone_set("America/Mexico_City");
$fecha_Actual = date("Y-m-d G:i:s");
// $insert = $conex->query("INSERT INTO publicaciones( id_usuarios, titulo, nombre_foto, contenido_publicacion, ingredientes,fecha_publicacion) VALUES ('$id_sesion','$titulo',$nombreImg,'$contenido','$ingredientes','$fecha_Actual')");
$insert = $conex->query("INSERT INTO `publicaciones`(`id_usuarios`, `titulo`, `nombre_foto`, `contenido_publicacion`, `ingredientes`) VALUES ('$id_sesion','$titulo','$nombreImg','$contenido','$ingredientes')");
if($insert){
    echo '<script>
    alert("Publicacion Correctas");
    window.location="../public/index.php"
    </script>';
}{
    echo '<script>
    alert("Error");
    window.location="../public/index.php"
    </script>';
}
?>