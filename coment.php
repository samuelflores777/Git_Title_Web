<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
            $datae = array();
            $datae[] = array(
                'Comentarios' => $_POST['comentarios'],
            );
            return json_encode($datae, JSON_UNESCAPED_UNICODE);
        }
          
        $name = "coment_samnet";
        $file_name = $name . '.json';
       
        if(file_put_contents(
            "$file_name", get_data())) {
                header("location: comentar.html", TRUE, 301);
                echo $file_name .'DATO ENVIADO';
        exit();
            }
        else {
            echo 'ERROR AL ENVIAR DATOS';
        }
    }
?>