<?php

if ((isset($_REQUEST['controller']))and isset($_REQUEST['action']))
{
    // si la variable request con controller no esta en blanco, y el action tampoco, entonces redirigimos a lo
    //se nos pide
    $controller = $_REQUEST['controller'];
    $action = 'Index'; $_REQUEST['action'];    
    callController($controller, $action);
}
else
{
  //  echo 'se redigira a el controlador principal';
    $controller = 'Home';
    $action = 'Index';
    //llamamos a la funcion 
    callController($controller, $action);    
}
function callController($controller, $action)
{
 
    require_once 'Controllers/'.$controller.'Controller.php';
    //creamos un controlador con el mismo controlador   
    $controller = ucwords($controller) .'Controller';  
     // Llama la accion
    call_user_func( array( $controller, $action ) );
}
?>
