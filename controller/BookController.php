<?php


namespace Controller;

use Model\Book;
use Model\BookDB;
use Model\DBConnection;


class BookController
{
    public BookDB $bookDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=manager_book", "root", "123456@Abc");
        $this->bookDB = new BookDB($connection->connect());
    }
    public  function  getAll()
    {
        $books = $this->bookDB->getAll();
        include "view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            include "view/add.php";
        } else {
            $errors = [];
            $fields = ['name', 'category', 'publisher', 'status'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = "Nhập đủ trường vào";
                }
            }

            if (empty($errors)) {
                $name = $_POST['name'];
                $category = $_POST['category'];
                $publisher = $_POST['publisher'];
                $status = $_POST['status'];
                $target_dir = "view/uploads/";
                $target_file = $target_dir.basename($_FILES['fileUpload']['name']);
                move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
                $image = $_FILES['fileUpload']['name'];
                $book = new Book($name, $category, $publisher, $status, $image);
                $this->bookDB->create($book);
                header("Location: index.php?page=book&action=list");
            } else {
                include "view/add.php";
            }
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->bookDB->delete($id);
        header("Location: index.php?page=book&action=list");
    }

}