<?php


namespace Model;


use PDO;

class BookDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create(object $book)
    {
        $sql = "INSERT INTO Book(nameBook, category, publisher, status, image) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $book->name);
        $stmt->bindParam(2, $book->category);
        $stmt->bindParam(3, $book->publisher);
        $stmt->bindParam(4, $book->status);
        $stmt->bindParam(5, $book->image);
        return $stmt->execute();
    }

    public function getAll()
    {

        $books = [];
        $sql = "SELECT * FROM `Book`";
        $stml = $this->connection->prepare($sql);
        $stml->execute();
        $result = $stml->fetchall();
        foreach ($result as $row) {
            $book = new Book($row['nameBook'], $row['category'], $row['publisher'], $row['status'], $row['image']);
            $book->setId($row['ID']);
            $books[] = $book;
        }
        return $books;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `Book` WHERE `ID` = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
    function  findByEmailPassword($request){
        $sql = "SELECT `idStudent`,`nameStudent`,`Age`,`numberPhone`,`email` FROM `Students` WHERE email=? AND password=?";
        $stml = $this->connection->prepare($sql);
        $stml->bindParam(1,$request['email']);
        $stml->binparam(2,$request['password']);
        $stml->execute();
        return $stml->fetch(PDO::FETCH_ASSOC);

    }



}
