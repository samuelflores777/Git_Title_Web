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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Botones</title>
</head>

<h1> CONTROL DE BOTONES - SAMNET</h1>    

<form action="reg.php" method="post">
                <div class="input">
                    <label>ESCRIBIR EL NUMERO IP DEL VMIX</label><BR>
                    <input type="text" Placeholder="NUM IP VMIX" name="ipvmix" value ="<?php if(empty($ipvmix)) echo ""; else echo $ipvmix;?>" required>
                </div>
                <br />

                <div class="input">
                    <label>ESCRIBIR EL NUMERO DE CANAL DE LOS NOMBRES</label><BR>
                    <input type="text" Placeholder="CH NUM" name="nomcanal1" value ="<?php if(empty($numcanal1)) echo ""; else echo $numcanal1;?>" required>
                </div>
                <div class="input">
                    <label>ESCRIBIR EL NUMERO DE OVERLAY</label><BR>
                    <input type="text" Placeholder="OVE NUM" name="nomove1" value ="<?php if(empty($numove1)) echo ""; else echo $numove1;?>" required>
                </div>
                <br />
                <div class="input">
                    <label>ESCRIBIR EL NUMERO DE CANAL DE LOS COMENTARIOS</label><BR>
                    <input type="text" Placeholder="CH NUM" name="nomcanal2" value ="<?php if(empty($numcanal2)) echo ""; else echo $numcanal2;?>" required>
                </div>
                <div class="input">
                    <label>ESCRIBIR EL NUMERO DE OVERLAY</label><BR>
                    <input type="text" Placeholder="OVE NUM" name="nomove2" value ="<?php if(empty($numove2)) echo ""; else echo $numove2;?>" required>
                </div>
                <div class="input">
                    <input type="submit" name="guardar" value="GUARDAR DATOS">
                </div>

                <div class="input">
                    <input type="submit" name="limpiar" value="LIMPIAR DATOS">
                </div>
</form>
<div class="ref0">
            <h1>BOTONES</h1>
                <a href="control_e.php  " > MOSTRAR NOMBRES Y CARGO </a>

        </div>
</body>
</html>