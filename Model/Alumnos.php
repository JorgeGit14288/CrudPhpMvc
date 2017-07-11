<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumnos
 *
 * @author Jorge Fuentes
 */
class Alumnos {
    
    public function _CONSTRUCT()
    {
        
    }
    //put your code here
    private $id;
    private $nombre;
    private $apellido;
    private $sexo;
    private $fechaNacimiento;
    private $fechaRegistro;
    private $correo;
    
   
        
 //metodos de acceso a los datos
    public function __get($name) {
        return $this->$name;
    }
    public function __set($name, $value) {
        
        return $this->$name=$value;
    }
                      
}
