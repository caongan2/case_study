<?php
use Controller\BookController;
require "vendor/autoload.php";
$controller = new BookController();
$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
$category = $_REQUEST['category'] ?? null;
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
            case "category":
                $controller->getDetective();
                break;
            case "details":
                $controller->getDetails();
                break;
            case "edit":
        }
        break;
    case "category":
        switch ($category) {
            case "detective":
                $controller->getDetective();
                break;
            case "horror":
                $controller->getHorror();
                break;
            case "novelslove":
                $controller->getNovelsLove();
                break;
            case "memoirs":
                $controller->getMemoirs();
                break;
        }
        break;
}
?>