<?php

include ("conexion.php");
$link = conectar();

$nom_Com = $_POST['nombre_Com'];
$nom_Cien = $_POST['nombre_Cien'];
$familia = $_POST['familia'];
$lug_Origen = $_POST['lugar_Origen'];
$caract = $_POST['caract'];
$riesgo = $_POST['riesgo'];
$img = $_POST['img'];
$info = $_POST['link'];

if($nom_Com != null || $nom_Cien != null || $familia != null || $lug_Origen != null || $caract != null || $riesgo != null || $img != null || $info != null){
    $sql = "INSERT INTO plants (nombre_Com, nombre_Cien, familia, lugar_Origen, caract, riesgo, img, link) VALUES ('".$nom_Com."', '".$nom_Cien."', '".$familia."', '".$lug_Origen."', '".$caract."', '".$riesgo."', '".$img."', '".$info."')";
    mysqli_query($link, $sql);

    if($user=1){
        header("Location:index.php");
    }
}
?>