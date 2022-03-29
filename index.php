<?php
require_once "models/cliente.php";

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id'])) {
            echo json_encode(Cliente::get($_GET['id']));
        } else {
            echo json_encode(Cliente::getAll());
        }
        break;
    case 'POST':
        
        break;
    case 'PUT':

        break;
    case 'DELETE':

        break;
    
}

?>