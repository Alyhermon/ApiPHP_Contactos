<?php 

require_once "model/contactos.php";


header("Content-Type: application/json");
        switch($_SERVER['REQUEST_METHOD']){
            case 'GET':
                if (isset($_GET['id'])){
                    echo json_encode(contactos::getWhere($_GET['id']));
                }else{
                    echo json_encode(contactos::getAll()); 

                }                    
                break;
            case 'POST':
                $datos = json_decode(file_get_contents('php://input'));
                if($datos != NULL){
                    if(contactos::insert($datos->nombre, $datos->apellido, $datos->email, $datos->telefono)){
                        http_response_code(200);
                        echo "Contacto agregado exitosamente";
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
                $datos = json_decode(file_get_contents('php://input'));
                if($datos != NULL){
                    if(contactos::update($datos->id, $datos->nombre, $datos->apellido, $datos->email, $datos->telefono)){
                        http_response_code(200);
                        echo "Contacto actualizado exitosamente";
                    }//End
                    else{
                        http_response_code(400);
                    }
                }
                else{
                    http_response_code(405);
                }
                

                break;
            case 'DELETE':
                if(isset($_GET['id'])){
                    if(contactos::delete($_GET['id'])){
                        http_response_code(200);
                    }
                    else{
                        http_response_code(400);
                    }
                }
                else{
                    http_response_code(405);
                }
                break;

                default:
                http_response_code(405);
                break;
        }


?>