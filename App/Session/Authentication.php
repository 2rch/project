<?php

class Authentication
{
    public $login;
    public $pass;

    public function auth(string $login, string $pass): bool
    {
        $this->login = $login;
        $this->pass = $pass;
        return true;
    }

    public function isAuth(): bool
    {
        $arr = require '../Config/users.php';
        if (($this->login == $arr['user']) && ($this->pass == $arr['password'])) {
            return true;
        } else {
            return false;
        }

    }

    public function getLogin(): string
    {
        if (isset($this->login)) {
            return $this->login;
        }
    }

    public function logOut(): void
    {
        session_destroy();
        session_start();
    }
}