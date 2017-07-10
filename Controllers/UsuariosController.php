<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuariosController
 *
 * @author Jorge Fuentes
 */
class UsuariosController {
    //put your code here
    public function __construct(){}
 
		public function index(){
			echo 'index desde UsuarioController';
		}
 
		public function register(){
			echo 'register desde UsuarioConroller';
		}
 
		public function update(){
			echo 'update desde UsuarioConroller';
 
		}
 
		public function delete(){
			echo 'delete desde UsuarioConroller';
		}
		
		public function error(){
			require_once('Views/Usuario/error.php');
		} 
}
