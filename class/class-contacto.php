<?php

class contacto{
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;

    public function _constructor($nombre, $apellido, $email, $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    //Metodos getters and setters
    //Nombre
    public function getNombre(){
        return $this-> nombre;
    }

    @return self 

    public function setNombre ($nombre){

        $this->nombre = $nombre;
        return $this;

    }

    //Apellido
    public function getApellido(){
        return $this-> apellido;
    }

    @return self 

    public function setApellido ($apellido){

        $this->apellido = $apellido;
        return $this;

    }

    //Email
    public function getEmail(){
        return $this-> email;
    }

    @return self 

    public function setEmail ($email){

        $this->email = $email;
        return $this;

    }

    //Telefono
    public function getTelefono(){
        return $this-> telefono;
    }

    @return self 

    public function setTelefono ($telefono){

        $this->telefono = $telefono;
        return $this;

    }

    public function __toString(){
        return $this->nombre ."".$this->apellido." (".$this->email.", ".$this->telefono.")";
    }


    //CRUD

    public function obtenerConatctos(){

    }

    public function guardarContactos(){
        
    }

    public function editarContactos(){
        
    }

    public function eliminarContactos(){
        
    }

}




?>