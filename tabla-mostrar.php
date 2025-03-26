<?php
require 'conexion.php';
$consulta = "SELECT * FROM registro";
$sql = mysqli_query($conex, $consulta);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
<center>
  <audio controls autoplay>
  <source src="menu.ogg" type="audio/ogg">
  <source src="menu.mp3" type="audio/mpeg">
</audio>

  <style>
body {background-image: url(estresa.jpeg)}

table,th,td{
  border: 2px solid #d9baf6;
  font-size: 20px;
  color: #2db571;
}

</style>
</head>
<body>
  <h1>Datos Ingresados</h1>
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
</center>
</body>
</html>