<?php
    //localhost:8080/..../api/contacto.php

    echo 'Informacion: ' .file_get_contents('php://input');
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            echo "Guardar";

            break;
        case 'GET':
            echo "Obtener Contacto/s";
            break;
        case 'PUT':
            echo "Editar un Contactos";
            break;
        case 'DELETE':
            echo "Eliminar un Contactos";
            break;
    }


    
?>