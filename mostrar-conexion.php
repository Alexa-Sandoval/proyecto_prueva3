
<?php
$serv = "localhost";
$usu = "root";
$pass = "";
$db = "proseka";

$conex = new mysqli($serv,$usu,$pass,$db);

if($conex-> connect_error){
	echo "No se ha podido conectar a la base de datos.";
} else {
	echo "conexión exitosa";
}

$consulta = "SELECT * FROM registro";
$sql = mysqli_query($conex, $consulta);


?>
<html>
<style>
	table, th, td {
	border: 1px solid black;
	}
</style>
<table>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Personaje favorito</th>
    <th>Banda</th>
    <th>Cancion</th>
    <th>Inicio</th>
    <th>Nivel</th>
    <th>Gemas</th>
  </tr>
  <?php while($ver = mysqli_fetch_array($sql)) { ?>
  <tr>
    <td><?php echo $ver['id']; ?></td>
    <td><?php echo $ver['nom']; ?></td>
    <td><?php echo $ver['pers']; ?></td>
    <td><?php echo $ver['band']; ?></td>
    <td><?php echo $ver['canc']; ?></td>
    <td><?php echo $ver['inicio']; ?></td>
    <td><?php echo $ver['nivel']; ?></td>
    <td><?php echo $ver['gem']; ?></td>
  </tr>
<?php } ?>
</table>