<?php


use Controller\BookController;

require "vendor/autoload.php";


$controller = new BookController();
$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
switch ($page) {
    case'book':
        switch ($action) {
            case 'list':
                $controller->getAll();
                break;
            case 'add':
                $controller->add();
                break;
            case "delete":
                $controller->delete();
                break;
        }
        break;


}
?>