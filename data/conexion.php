<?php 

class conexion extends Mysqli{
    function __construct(){
        parent::__construct('localhost', 'root', '', 'dbcontacts');
        $this->set_charset('utf8');
        $this->connect_error == NULL ? 'CONEXION EXITOSA A LA BASE DE DATOS' : die ('Error al conectarse');
    }
}


?>