<?php 
  require_once("../sql/conexion.php");
  $consulta = $conex->query("SELECT * FROM publicaciones");   
  if ($consulta->num_rows >0)
  while($row = $consulta->fetch_assoc()){
  ?> 
    <tr>
    <img src="../docs/publicaciones/<?php echo $row['nombre_foto'] ?>" class="img-fluid rounded-start" alt="...">
       <th scope="row"><?php  echo $row["titulo"] ?></th>
      <td><?php  echo $row["contenido_publicacion"] ?></td>
     <td><?php  echo $row["ingredientes"] ?></td>
      <td><a href="hola.php?hola=<?php  echo $row["Usuarioid"] ?>" class="btn btn-primary">eliminar</a></td>
    </tr>
    <?php 
}
?>
<?php 
$query("DELETE FROM publicaciones WHERE titulo, contenido_publicacion, ingredientes");

?>
