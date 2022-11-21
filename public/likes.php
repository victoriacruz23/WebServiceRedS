<?php
require('../BD/conexion.php'); 

if (empty($_POST['id_likes']) || empty($_POST['id_usuarios ']) || empty($_POST['id_publicacions'])) {
    header("Location: ../public/index.php");
    exit;
    $titulo = $_POST["id_likes"];


    $insert = $conex->query("INSERT INTO `likes`(`id_likes`, `id_usuarios`, `id_publicacions`)
    VALUES ('$id_likes','$id_usuairos','$id_publicacions')");
    if($insert){
}}










?>