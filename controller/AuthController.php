<?php
namespace Controller;
use Model\Auth_Model;

class AuthController
{
    protected Auth_Model $auth_Model;


    public function __construct()
    {
        $this->auth_Model = new Auth_Model();
    }

    public function login(): bool
    {
        return $this->auth_Model->AuthByEmailPassword($_REQUEST);
    }

    public function logout() {
        $this->auth_Model->logout();
    }
}
