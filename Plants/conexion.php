<?php

function conectar(){
	$host 		= "localhost";
	$user 		= "root";
	$key 		= "";
	$bd 		= "plants";
	$conexion 	= mysqli_connect($host,$user,$key);

	mysqli_select_db($conexion,$bd);

	return $conexion;
}

?>