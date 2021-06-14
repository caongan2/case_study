<?php

namespace Model;

class Auth_Model
{
    protected BookDB $bookDB;
    public function __construct()
    {
        $this->bookDB = new BookDB();
    }
    function AuthByEmailPassword($request){
        $auth = $this->bookDB->findByEmailPassword($request);
        if ($auth){
            $_SESSION['userLogin'] = $auth;
            header('location:../index.php');
        }
        return false;
    }
    function logout() {
        unset($_SESSION['userLogin']);
        header('location: login/login.php');
    }
}
