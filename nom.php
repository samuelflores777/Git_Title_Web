<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
            $datae = array();
            $datae[] = array(
                'Nombres' => $_POST['nombres'],
                'Cargos' => $_POST['cargos'],
            );
            return json_encode($datae, JSON_UNESCAPED_UNICODE);
        }
          
        $name = "nom_samnet";
        $file_name = $name . '.json';
       
        if(file_put_contents(
            "$file_name", get_data())) {
                header("location: nombres.html", TRUE, 301);
                echo $file_name .'DATO ENVIADO';
        exit();
            }
        else {
            echo 'ERROR AL ENVIAR DATOS';
        }
    }
?>