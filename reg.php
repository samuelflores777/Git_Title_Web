<?php


$host = "localhost";
$usuario = "root";
$clave = "";
$db = "test";
$conexion = mysqli_connect($host, $usuario, $clave, $db);

if (isset($_POST['guardar'])){
                    $ipvmix = $_POST['ipvmix'];
                      $nomcanal1 =  $_POST['nomcanal1'];
                      $nomove1 =  $_POST['nomove1'];
                      $nomcanal2 = $_POST['nomcanal2'];
                      $nomove2 = $_POST['nomove2'];
                      $query="INSERT INTO vmix (ipvmix, numcanal1, numove1, numcanal2, numove2) VALUES ('$ipvmix', '$nomcanal1','$nomove1','$nomcanal2','$nomove2')";
                      $results = mysqli_query($conexion, $query);
                      header("location: control.php", TRUE, 301);
                      exit();
}

if (isset($_POST['limpiar'])){
      $query="TRUNCATE TABLE vmix";
      $results = mysqli_query($conexion, $query);
      header("location: control.php", TRUE, 301);
      exit();
}
?>