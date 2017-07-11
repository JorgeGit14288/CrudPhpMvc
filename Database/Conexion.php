<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author Jorge Fuentes
 */
class Conexion {
    //put your code here
   
    public function _CONSTRUCT()
    {
        
    }
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=colegio;charset=utf8', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
