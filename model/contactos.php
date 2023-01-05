<?php

require_once "data/conexion.php";

class contactos{
    
    public static function getAll(){
        $db = new conexion();
        $query = "SELECT * FROM contactos";
        $resultado = $db->query($query);
        $datos = [];
        if($resultado->num_rows){
            while ($row = $resultado->fetch_assoc()){
                $datos[] = [
                    'id' => $row['id'], 
                    'nombre' => $row['nombre'], 
                    'apellido' => $row['apellido'], 
                    'email' => $row['email'], 
                    'telefono' => $row['telefono']


                ];
            }

            return $datos;

        }
        return $datos;
    }

    public static function getWhere($id){
        $db = new conexion();
        $query = "SELECT * FROM contactos WHERE id=$id";
        $resultado = $db->query($query);
        $datos = [];
        if($resultado->num_rows){
            while ($row = $resultado->fetch_assoc()){
                $datos[] = [
                    'id' => $row['id'], 
                    'nombre' => $row['nombre'], 
                    'apellido' => $row['apellido'], 
                    'email' => $row['email'], 
                    'telefono' => $row['telefono']


                ];
            }

            return $datos;

        }
        return $datos;
    }

    public static function insert($nombre, $apellido, $email, $telefono){
        $db = new conexion();
        $query = "INSERT INTO contactos (nombre, apellido, email, telefono) 
        VALUES ('".$nombre."', '".$apellido."', '".$email."', '".$telefono."')";
        $db-> query($query);
        if($db->affected_rows){

            return true;
        }

        return false;
    }

    public static function update($id, $nombre, $apellido, $email, $telefono){
        $db = new conexion();
        $query = "UPDATE contactos SET nombre = '".$nombre."', apellido = '".$apellido."', email = '".$email."', telefono = '".$telefono."'
        WHERE id = '".$id."' ";
        $db-> query($query);
        if($db->affected_rows){

            return true;
        }

        return false;
    }

    public static function delete($id){
        $db = new conexion();
        $query = "DELETE FROM contactos WHERE id = $id";
        $db->query($query);
        if($db->affected_rows){
            return true;
        }
        return false;
        
    }
}
?>