<?php
require_once("conexion.php");
$cp=$_POST["CodiPost"];
$categoria= $_POST["categoria"];
$Fecha=$_POST["Fecha"];
$Estado=$_POST["Estado"];
$Ciudad=$_POST["Ciudad"];
$Descripcion=$_POST["Descripcion"];
$img=$_POST["formFileSm"];

$insert=$conexion->query("INSERT INTO publicaciones(`cp`, `fecha_publicacion`, `categoria`, `estado`, `ciudad`, `contenido_publicacion`, `nombre_foto`) VALUES ('$cp','$categoria','$Fecha','$Estado','$Ciudad','$Descripcion','$img')");
if($insert){
    echo '<script>
    alert("Publicacion Correctas");
    window.location="../Noticia.php"
    </script>';
}{
    echo '<script>
    alert("Error");
    window.location="../Noticia.php"
    </script>';
}
// print_r($_POST);
?>