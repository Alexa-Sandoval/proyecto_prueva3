<?php
$serv = "localhost";
$usu = "root";
$pass = "";
$db = "proseka";

$conex = new mysqli($serv,$usu,$pass,$db);

if($conex-> connect_error){
	echo "No se ha podido conectar a la base de datos.";
} else {
	echo "";
}
?>