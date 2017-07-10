<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlumnosController
 *
 * @author Jorge Fuentes
 */
class AlumnosController {
    //put your code here
    public function _CONSTRUCT()
    {
        
    }
    public  function Index()
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Alumnos/Index.php';
        require_once 'Views/Shared/Footer.php';
    }
    public function Create()
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Alumnos/Create.php';
        require_once 'Views/Shared/Footer.php';
    }
        public function postCreate()
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Alumnos/Create.php';
        require_once 'Views/Shared/Footer.php';
    }
        public function Details($id)
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Alumnos/Details.php';
        require_once 'Views/Shared/Footer.php';
    }
        public function Edit($id)
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Alumnos/Create.php';
        require_once 'Views/Shared/Footer.php';
    }
        public function postEdit()
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Alumnos/Create.php';
        require_once 'Views/Shared/Footer.php';
    }
        public function Delete($id)
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Alumnos/Create.php';
        require_once 'Views/Shared/Footer.php';
    }
        public function postDelete($id)
    {
        require_once 'Views/Shared/Head.php';
        require_once 'Views/Alumnos/Create.php';
        require_once 'Views/Shared/Footer.php';
    }
}
