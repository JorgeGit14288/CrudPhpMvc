<?php
require_once 'Database/Conexion.php';
require_once 'Model/Alumnos.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlumnosDao
 *
 * @author Jorge Fuentes
 */
class AlumnosDao {
    //variable para conexion llamaca ctx que significa contexto
   private $pdo;
   public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::Conectar();  
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
    public function Listar()
    {
        try{
            //debemos de retornar un array con los datos de todos os alumnos
            $alumnos =  Array();
            $stm = $this->pdo->prepare("SELECT * FROM alumnos");
            $stm->execute();
            //convertimos el resultado en un array de alumnos
            
            foreach( $stm->fetchAll(PDO::FETCH_OBJ) as $a)                
            {
                $al = new Alumnos();
                $al->__set('id',$a->id);
                $al->__set('nombre',$a->Nombre);
                $al->__set('apellido',$a->Apellido);
                $al->__set('sexo',$a->Sexo);
                $al->__set('fechaNacimiento',$a->FechaNacimiento);
                $al->__set('fechaRegistro',$a->FechaRegistro);
                $al->__set('correo',$a->Correo);
              
                //metemos el alumno en el array
                $alumnos[]= $al;                
            }
            return $alumnos;
            
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
        
    }
    public function Crear(Alumnos $alumno)
    {
        
    }
    public function Actualizar(Alumnos $alumno)
    {
        
    }
    public function Eliminar($id)
    {
        
    }
    public function Buscar($id)
    {
        
    }
}
