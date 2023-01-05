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
                $datos = json_decode(file_get_contents('php://input'));
                if($datos != NULL){
                    if(contactos::insert($datos->nombre, $datos->apellido, $datos->email, $datos->telefono)){
                        http_response_code(200);
                    }//End
                    else{
                        http_response_code(400);
                    }
                }
                else{
                    http_response_code(405);
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