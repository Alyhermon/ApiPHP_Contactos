<?php 

require_once "model/contactos.php";


header("Content-Type: application/json");
        switch($_SERVER['REQUEST_METHOD']){
            case 'GET':
                if(isset($_GET['id'])){
                    echo json_encode(contactos::getWhere($_GET['id']));
                }
                    echo json_encode(contactos::getAll());
                break;
            case 'POST':
                
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