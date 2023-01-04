<?php
    //localhost:8080/..../api/contacto.php

    //echo 'Informacion: ' .file_get_contents('php://input');
        header("Content-Type: application/json");
        switch($_SERVER['REQUEST_METHOD']){
            case 'POST':
                $_POST = json_decode(file_get_contents('php://input'),true);
                $resultado["Mensaje"] = "Guardar Usuarios, Informacion:" . json_encode($_POST);
                echo json_encode($resultado);
                break;
            case 'GET':
                if (isset($_GET['id'])){
                    $resultado["Mensaje"] = "Guardar el contacto con el id: " . $_GET['id'];
                }
                else{
                    $resultado["Mensaje"] = "Retornar Todos los contactos";
                    echo json_encode($resultado);
                }
                break;
            case 'PUT':
                $_PUT = json_decode(file_get_contents('php://input'),true);
                $resultado["Mensaje"] = "Editar un Contactos con id" .$_GET['id'].
                            ", Informacion a actualizar: " .json_encode($_PUT);
                echo json_encode($resultado);

                break;
            case 'DELETE':
                $resultado["Mensaje"] = "Eliminar un Contactos con el id: " .$_GET['id'];
                echo json_encode($resultado);
                break;
        }


    
?>