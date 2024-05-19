<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once 'd/getD.php';
        break;

    

    default:
        # code...
        break;
}