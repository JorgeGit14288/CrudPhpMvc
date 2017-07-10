<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CursosController
 *
 * @author Jorge Fuentes
 */
class CursosController {
    //put your code here
    public function _CONSTRUCT()
    {
        
    }
    public function  Index()
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Cursos/Index.php';
        require_once 'Views/Shared/Footer.php';
    }
}
