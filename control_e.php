<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$db = "test";
$conexion = mysqli_connect($host, $usuario, $clave, $db);

$query = "SELECT * FROM vmix";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $ipvmix = $row['ipvmix'];
            $numcanal1 = $row['numcanal1'];
            $numove1 = $row['numove1'];
            $numcanal2 = $row['numcanal2'];
            $numove2 = $row['numove2'];
            }

  $enlace = $ipvmix."/api/?Function=OverlayInput".$numove1."&Input=".$numcanal1;

   $dom = new DomDocument();
$dom->load($enlace);
header("location: control.php");




?>