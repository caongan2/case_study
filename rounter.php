<?php
require "vendor/autoload.php";
use Controller\BookController;

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
$controller = new BookController();
switch ($page) {
    case'book':
        switch ($action) {
            case'add':
                $controller->add();
                break;
            case 'list':
                $controller->getAll();
                break;
        }
        break;
}