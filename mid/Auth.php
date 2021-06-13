<?php
namespace Mid;

class Auth
{
    public function __construct()
    {
    }
    function islogin(){
        if(!isset($_SESSION['userLogin'])){
            header('location: login/login.php');
        }
    }
}