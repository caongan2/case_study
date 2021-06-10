<?php
require "vendor/autoload.php";

use Controller\BookController;

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
switch ($page) {
    case'book':
        $controller = new BookController();
        switch ($action) {
            case'add':
                $controller->add();
                break;

        }


}
