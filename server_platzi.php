<?php  

//arreglo de simulacion de datos
//Definimos los recursos disponibles
$allowedResourceTypes = [
    'books',
    'authors',
    'genres'
];

$resourceType = $_GET['resource_type'];


//Si no pertenece resourcetype  a alguno elemento del array allowedResourceTypes
//Vlidamos que el recurso exista
/*if (!in_array($resourceType,$allowedResourceTypes)) {
    die;
}*/

//Definimos los recursos
$books = [
    1 => [
        'titulo' => 'El Señor de los anillos',
        'id_autor' => 1,
        'id_genero' => 2,
    ],
    2 => [
        'titulo' => 'Lo que el viento se llevo',
        'id_autor' => 2,
        'id_genero' => 1,
    ],
    3 => [
        'titulo' => 'Odisea',
        'id_autor' => 3,
        'id_genero' => 4,
    ],
];

$error = array('Message' => 'Defina el recuso', );

header('Content-Type: application/json');


//Se etablecen los metodos de consumo
//Generamos la respuesta, solo si el pedido es correcto
switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
    case 'GET':
    if (in_array($resourceType,$allowedResourceTypes)) {
        echo json_encode($books);
    }else{
        echo json_encode($error);
    }
        break;
    case 'POST':

        break;
    case 'PUT':

        break;
    case 'DELETE':

        break;
    default:
        # code...
        break;
}
