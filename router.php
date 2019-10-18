<?php

$matches=[];
//tomar la expresion regular para verificar si la URI conside con ese patron de preg_match
if(preg_match('/\/([^\/]+)\/([^\/]+)/',$_SERVER["REQUEST_URI"],$matches))
{
    //generar las variables de $_GET
    $_GET['resource_type']=$matches[1];    
    $_GET['resource_id']=$matches[2];
    error_log(print_r($matches,1));
    require 'server_platzi.php';
}elseif(preg_match('/\/([^\/]+)\/?/',$_SERVER["REQUEST_URI"],$matches))
{
    $_GET['resource_type']=$matches[1];        
    error_log(print_r($matches,1));
    require 'server_platzi.php';
}else
{
    error_log('No matches');
    http_response_code(404);
}

?>