<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author Jorge Fuentes
 */
class HomeController {
    //put your code here
    public function _CONSTRUCT()
    {
        
    }
    public function Index()
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Home/Index.php';
        require_once 'Views/Shared/Footer.php';
       // echo 'Se requiere la vista Index de el controlador Home';
    }
    public function Error()
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Home/Error.php';
        require_once 'Views/Shared/Footer.php';   
    }
    
}
